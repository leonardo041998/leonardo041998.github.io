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
    return view('home');
});


Route::get('/login', '\App\Http\Controllers\LoginController@index');
Route::get('/register', '\App\Http\Controllers\RegisterController@index');

Route::get('/carts', '\App\Http\Controllers\CartController@index');
Route::get('/dashboard', '\App\Http\Controllers\HomeController@index');
Route::get('/about', '\App\Http\Controllers\HomeController@about');
Route::get('/contact', '\App\Http\Controllers\HomeController@contact');
Route::get('/checkouts', '\App\Http\Controllers\HomeController@checkout');
Route::get('/shop', '\App\Http\Controllers\HomeController@shop');

