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

Route::get('/', function () {
    return redirect('/shops');
});
Route::get('/intro', function() {
    return view('intro');
});
Route::get('/user/show{id}', 'UserController@show')->name('user.show');

Route::get('/shops', 'ShopController@index')->name('shop.list');
Route::get('/shops/new', 'ShopController@create')->name('shop.new');
Route::post('/shop', 'ShopController@store')->name('shop.store');
Route::get('/shop/edit/{id}', 'ShopController@edit')->name('shop.edit');
Route::post('/shop/update/{id}', 'ShopController@update')->name('shop.update');
Route::get('/shops/{id}', 'ShopController@show')->name('shop.detail');
Route::delete('/shop/{id}', 'ShopController@destroy')->name('shop.destroy');

Auth::routes();


