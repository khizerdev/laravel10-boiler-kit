<?php

namespace App\Http\Livewire;

use Illuminate\Support\Facades\Hash;
use Livewire\WithPagination;
use Livewire\Component;


class Cart extends Component
{
    public $coupon;

    protected $listeners = [
        '$refresh'
    ];
    

    public function applyCoupon()
    {
        $cart = session()->get('cart');

        $ids = [];

        foreach($cart as $item) {
            array_push($ids, $item['product']['id']);
        }

        $product = Component::whereIn('id', $ids)->where(function ($query) {
            $query->where('coupon_title', $this->coupon)
                ->orWhere(function ($query) {
                    $query->where('promo_title', $this->coupon)
                        ->where('end_date', '>=', date('Y-m-d'));
                });
        })->first();

        if($product) {
           
            foreach ($cart as $key => $item) {
                if($item['product']['id'] == $product->id) {
                    
                    if(!isset($cart[$key]['product']['coupon_applied'])){

                        if($product->promo_title) {
                            $discount = $item['product']['price'] * $product->promo_percentage/100;
                        } else {
                            $discount = $item['product']['price'] * $product->coupon_percentage/100;
                        }
                        $new_price = $item['product']['price']-$discount;
                        $cart[$key]['product']['old_price'] = $item['product']['price'];
                        $cart[$key]['product']['price'] = $new_price;
                        $cart[$key]['product']['coupon_applied'] = true;
                    }
                }
            }

            session()->put('cart', $cart);

            $this->emit('alert', ['type' => 'success', 'message' => 'Coupon Applied']);

            $this->emitTo('mini-cart', '$refresh');

        } else {

            $this->emit('error', ['message' => 'Invalid Coupon']);

        }


        $this->coupon = "";
    }

    public function removeCoupon($id)
    {
        $cart = session()->get('cart');

        $cart[$id]['product']['price'] = $cart[$id]['product']['old_price'];

        unset($cart[$id]['product']['coupon_applied']);
        unset($cart[$id]['product']['old_price']);

        session()->put('cart', $cart);

        $this->emit('alert', ['type' => 'success', 'message' => 'Coupon Removed']);

        $this->emitTo('mini-cart', '$refresh');

    }
 
    public function removeFromCart($id)
    {
    
        $cart = session()->get('cart');
     
        unset($cart[$id]);

        session()->put('cart', $cart);

        $this->emit('alert', ['type' => 'success', 'message' => 'Removed from cart']);

        $this->emitTo('mini-cart', '$refresh');
  
    }

    public function change($id,$value)
    {
        $cart = session()->get('cart');

        $cart[$id]['quantity'] =  $value;

        session()->put('cart', $cart);

        $this->emit('alert', ['type' => 'success', 'message' => 'Updated']);

        $this->emitTo('mini-cart', '$refresh');

    }

    public function render()
    {
        $cart = session()->get('cart') ? session()->get('cart') : [];
      
        $total = 0;
        if($cart){
            foreach($cart as $item){
            
                    $total += $item['product']['price']*$item['quantity'];
            
            }
        }

        return view('livewire.cart' , compact('cart','total'));
    }
    
}