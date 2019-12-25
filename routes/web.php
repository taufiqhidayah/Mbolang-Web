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
Auth::routes();
Route::get('/','PagesController@home');
Route::post('/register','PagesController@store');
Route::get('/register','PagesController@register');
Route::get('/login','PagesController@login');
Route::post('/login','PagesController@loginAuth');
Route::get('/detail-produk-tenda','PagesController@detProduk');
Route::get('/detail-produkTenda','PagesController@detProdukTenda');

Route::get('/pemesanan','PagesController@pemesanan');
