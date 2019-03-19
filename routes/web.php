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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::prefix('order')->group(function() {
	Route::get('/create', 'OrderController@create')->name('order.create');
	Route::post('/store', 'OrderController@store')->name('order.store');

});

Route::prefix('product')->group(function() {
	Route::get('/create','ProductController@create')->name('product.create');
	Route::post('/store','ProductController@store')->name('product.store');
	Route::get('/index','ProductController@index')->name('product.index');
	Route::delete('/delete/{id}','ProductController@destroy')->name('product.destroy');
	Route::get('/edit/{id}','ProductController@edit')->name('product.edit');
	Route::post('/update/{id}','ProductController@update')->name('product.update');
});

