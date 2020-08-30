<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('/', 'FrontendController@getHome');
Route::get('login','AccountController@getLogin');

/*----------------Admin------------------*/
Route::group(['prefix' => '/admin','namespace'=>'Admin'],function(){
	Route::get('/login','AccountController@index');
	Route::get('/register','AccountController@register');
	Route::post('/check-register', 'AccountController@checkRegister');
	Route::get('/','HomesController@index');
	Route::group(['prefix' => '/roles'], function(){
		Route::get('/', 'RolesController@index');
		Route::get('/create', 'RolesController@create');
		Route::post('/store', 'RolesController@store');
	});
	
	/*Route::group(['middleware' => ['auth.admin']], function ()
	{
		Route::get('/','HomesController@index');
	});*/
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Route::resource('users', UsersController::class);