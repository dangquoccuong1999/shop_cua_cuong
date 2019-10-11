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


Route::get('/', 'StoreController@index')->name('index');

Route::get('cart', 'CartController@index')->name('index.cart');
Route::get('cart/{id}', 'CartController@add')->name('add.cart');
Route::get('cart/remove/{id}', 'CartController@remove')->name('remove.cart');


Route::get('/wishlist', 'WishListController@index')->name('index.wishlist');
Route::get('/wishlist/{id}', 'WishListController@add')->name('add.wishlist');
Route::get('/wishlist/{id}/delete', 'WishListController@remove')->name('remove.wishlist');


