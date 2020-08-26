<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomesController extends Controller
{
    public function index()
    {
    	$title = "Fashion T&T";
    	return view('admin.home.dashboard',compact('title'));
    }
}
