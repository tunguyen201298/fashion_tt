<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class HomesController extends Controller
{
    public function index()
    {
    	$title = "Fashion T&T";
    	return view('admin.home.dashboard',compact('title'));
    }
}
