<?php

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

Route::get('/', 'FrontController@home');
Route::get('about', 'FrontController@about');
Route::get('service', 'FrontController@service');

Route::get('login', 'Admin\AccountController@login');
Route::post('login-store', 'Admin\AccountController@loginstore');
Route::group(['middleware' => 'checkloggedin'], function(){
	Route::get('dashboard', 'Admin\AdminController@home');

	Route::get('posts', 'Admin\PostController@index');
	Route::get('post-add', 'Admin\PostController@add');
	Route::post('post-store', 'Admin\PostController@store');

	Route::get('services', 'Admin\ServiceController@index')->name('services');
	Route::get('service-add', 'Admin\ServiceController@add')->name('service-add');
	Route::post('service-store', 'Admin\ServiceController@store');
	Route::get('service-edit/{id}', 'Admin\ServiceController@edit')->name('service-edit');
	Route::post('service-update/{id}', 'Admin\ServiceController@update')->name('service-update');

	Route::get('logout', 'Admin\AccountController@logout');
});


