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


Route::get('/', 'FrontEndController@index')->name('home');
Route::get('/products', 'FrontEndController@products')->name('products');
Route::get('/product', 'FrontEndController@product')->name('product');
Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');

Route::group(['prefix'=> 'admin', 'middleware'=>'auth'], function() {
	Route::get('/', function() {
	    return view('admin.index');
	})->name('admin.index');
	Route::resource('product','ProductsController');
	Route::resource('category','CategoriesController');
});


