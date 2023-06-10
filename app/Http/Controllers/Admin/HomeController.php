<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Company;

class HomeController extends Controller
{
    /**
     * Show the login page
     *
     * @return \Illuminate\Http\Response
     */
    public function login()
    {
       
        return view('admin.login');
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        \Artisan::call("view:clear");
        \Artisan::call("cache:clear");
        \Artisan::call("config:clear");
        return view('admin.index');
    }
    /**
     * Take DB Backup.
     *
     * @return \Illuminate\Http\Response
     */
    public function backup()
    {
        \Artisan::call('backup:run',['--only-db'=>true]);
        return back()->with("success" , 'Database backup has been successfuly taken');
    }
   

}
