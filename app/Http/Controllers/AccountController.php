<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function getLogin(){
    	$title = "trang đăng nhập";
    	return view('frontend.Account.registration',compact('title'));
    }
}
