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
	/*Route::group(['middleware' => ['auth.admin']], function ()
	{*/
		Route::get('/','HomesController@index');
		Route::resource('roles', RolesController::class);
		Route::resource('users', UsersController::class);
		Route::resource('categories', CategoriesController::class);
	/*});*/
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
