<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  function showHello(){
      echo '<i>Hello Controller</i>';
  }

  function show(){
    return view('create.member')
      ->with('name','Patthapong') //with('ตัวแปร','ค่าในตัวแปร')
      ->with('title','Laravel'); // ตัวแปร title เก็บค่า laravel
      //with() คือการโยนข้อมูลมาแสดงที่ view
  }//show
}//HelloController
