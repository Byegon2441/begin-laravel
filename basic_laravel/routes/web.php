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

// Route::get('/user',function (){//callback function
//     return '<h1>User : Patthapong</h1>';//return text
//     //เมื่อมาที่pathนี้จะreturn เป็น text ว่า User : Patthapong
// });

Route::get('/showname',function(){
    return '<b>Patthapong Naimkerd</b>';
});

Route::get('welcome/name','HelloController@showHello');
//การเชื่อม route กับ Controller
// ระบุ ชื่อ Controller @ ชื่อ function ใน controller แทน  callback function


Route::get('inputname/{name}','InputController@inputName');
Route::get('showproduct/{prouct}','InputController@showProduct');

Route::get('show','HelloController@show');// user . to acces inside floder


Route::get('/home', function () {
    return view('home');
});


Route::get('/detail', function () {
    return view('detail');
});

Route::get('users/{num1}/{num2}', function ($num1,$num2) {//ใน { } คือ parameter 
    return $num1+$num2;
});


Route::get('/pd', function () {
    return view('create.product'); //กรณี view อยู่ในโฟลเดอร์ 
                                  // folder.view
});

Route::get('/product','ProductController@con');



Route::resource('user', 'UserController');