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
	Route::get('/login','UsersController@login');
	Route::get('/register','UsersController@register');
	Route::post('/check-register', 'UsersController@checkRegister');
	Route::group(['middleware' => ['auth.admin']], function ()
	{
		Route::get('/','HomesController@index');
		Route::resource('roles', RolesController::class);
		Route::resource('users', UsersController::class);
		Route::resource('categories', CategoriesController::class);
	});
});
//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
<<<<<<< HEAD
//Route::resource('users', UsersController::class);

/*Route::resource('photo', 'PhotoController', ['except' => [
    'create', 'store', 'update/{id}', 'destroy','{id}/edit',
]]);*/
=======
>>>>>>> 3b39ce8edd71136549de451d0854ec2d363c7db8
