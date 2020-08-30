<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function index()
    {
    	$title = 'Đăng nhập';
    	return view('admin.accounts.login', compact('title'));
    }
    public function register()
    {
    	$title = 'Đăng ký';
    	return view('admin.accounts.register', compact('title'));
    }
    public function checkRegister(Request $request)
    {
        dd($request->all());
    }
    
   
    
}
