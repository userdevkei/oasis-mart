<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    /*-------------------------  Admin  ----------------*/

    public function profile()
    {
        return view('user.profile');
    }

    public function subscription()
    {
        return view('user.newsletter');
    }

    public function resetpwd()
    {
        return view('user.resetpassword');
    }

    public function wishlist()
    {
        return view('user.wishlist');
    }

    public function order()
    {
        return view('user.order');
    }

    /*-------------------------  Admin  ----------------*/

    public function admin_profile()
    {
        return view('admin.profile');
    }

    public function admin_subscription()
    {
        return view('admin.newsletter');
    }

    public function admin_resetpwd()
    {
        return view('admin.resetpassword');
    }

    public function admin_order()
    {
        return view('admin.order');
    }

}
