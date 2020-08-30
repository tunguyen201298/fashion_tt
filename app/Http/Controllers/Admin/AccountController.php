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
    public function role()
    {
        $title = 'Phân quyền';
        return view('admin.roles.index', compact('title'));
    }
    public function createRole()
    {
        $title = 'Thêm mới quyền';
        return view('admin.roles.create', compact('title'));
    }
    public function storeRole(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:100'
        ],
        [
            'required' => 'Thông tin bắt buộc',
            'max' => 'Dữ liệu quá dài'
        ]
        );
    }
}
