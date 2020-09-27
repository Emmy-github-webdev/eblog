<?php
namespace App\Controllers\Admin;

use App\Classes\Session;
use App\Classes\Request;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    
    public function show()
    {
        Session::add('admin', 'You are welcome, admin user');
        Session::remove('admin');
        
        if(Session::has('admin')){
            $msg = Session::get('admin');
        }else{
            $msg = 'Not defined';
        }
        return view('admin/dashboard', ['admin' => $msg]);
    }

    public function get()
    {
        Request::refresh();
        $data = Request::old('post', 'news');
        var_dump($data);
        /* if(Request::has('post')){
            $request = Request::all('post');
        
        var_dump( $request->news );
        }else{
            var_dump('posting doesn\'t exist');
        } */
        
    }
}