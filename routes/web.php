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

Route::get('/uangku', function () {
    return view('login');
});

Route::get('/uangku/register','App\Http\Controllers\uangkuController@register');
Route::post('store','App\Http\Controllers\uangkuController@store');
Route::get('/uangku/signin','App\Http\Controllers\uangkuController@signin');
