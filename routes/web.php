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

Route::get('/uangku/register','App\Http\Controllers\uangkuController@register');    //route dari sign in > register
Route::post('store','App\Http\Controllers\uangkuController@store');                 //route untuk tombol sign up input data kedatabase
Route::get('signin','App\Http\Controllers\uangkuController@signin');                //route dari register > sign in
//Route::get('afterlogin','App\Http\Controllers\uangkuController@afterlogin');        //route dari login > index
Route::post('afterlogin','App\Http\Controllers\uangkuController@afterlogin');        //route dari login > index
Route::get('/uangku/about','App\Http\Controllers\uangkuController@about');           //route navigasi
Route::get('/uangku/index','App\Http\Controllers\uangkuController@index');
Route::get('/uangku/multipayment','App\Http\Controllers\uangkuController@multipayment'); //route navigasi
Route::get('/uangku/transfer','App\Http\Controllers\uangkuController@transfer');            //route navigasi
Route::get('/uangku/transaction','App\Http\Controllers\uangkuController@transaction');  //route navigasi
Route::get('/uangku/saldo','App\Http\Controllers\uangkuController@saldo'); 
Route::get('/uangku/profile','App\Http\Controllers\uangkuController@profile');        //route navigasi
