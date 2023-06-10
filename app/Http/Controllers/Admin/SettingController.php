<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Models\Setting;


class SettingController extends Controller
{

    public function site()
    {
       
        $setting = Setting::all();
        $setting = $setting->pluck('value','title');
        $setting= $setting->toArray();
        $setting = (object)$setting;
        
    
        return view('admin.settings.site-identity',compact('setting'));
    }
    public function seo()
    {
       
        $setting = Setting::all();
        $setting = $setting->pluck('value','title');
        $setting= $setting->toArray();
        $setting = (object)$setting;
        
    
        return view('admin.settings.seo',compact('setting'));
    }
    public function basic()
    {
       
        $setting = Setting::all();
        $setting = $setting->pluck('value','title');
        $setting= $setting->toArray();
        $setting = (object)$setting;
        
    
        return view('admin.settings.basic',compact('setting'));
    }

    public function update_site(Request $request)
    {

        if ($request->hasFile('site_logo')) {
            $file = $request->file('site_logo');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move('public/admin/site/', $new_name);
            $file = 'public/admin/site/' . $new_name;
            
            Setting::where('title' , 'site_logo')->update(['value'=> $file]);
        }

        if ($request->hasFile('favicon')) {
            $file = $request->file('favicon');
            $new_name = rand() . '.' . $file->getClientOriginalExtension();
            $file->move('public/admin/site/', $new_name);
            $file = 'public/admin/site/' . $new_name;
            
            Setting::where('title' , 'favicon')->update(['value'=> $file]);
        }

        return back()->with('success' , 'Updated');

        
    }

    public function update(Request $request)
    {
        $data= $request->all();
        $fields = Setting::all();
        
        foreach ($fields as $key => $value) {
            
            $name = $value->title; 
            if(array_key_exists($name,$data)){
                
                $val = $data[$value->title];
                Setting::where('title',$name)->update(['value'=> $val]);
            }
        }

        return back()->with('success' , 'Updated');
    }

 
}
