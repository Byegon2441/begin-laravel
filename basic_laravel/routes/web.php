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
    return view('welcome');
});

Route::get('/user',function (){
    return '<h1>User : Patthapong</h1>';
});

Route::get('/showname',function(){
    return '<b>Patthapong Naimkerd</b>';
});

Route::get('welcome/name','HelloController@showHello');
//การเชื่อม route กับ Controller 
// ระบุ ชื่อ Controller @ ชื่อ function ใน controller แทน  callback function


Route::get('inputname/{name}','InputController@inputName');
Route::get('showproduct/{prouct}','InputController@showProduct');