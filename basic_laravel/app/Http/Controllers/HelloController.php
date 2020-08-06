<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HelloController extends Controller
{
  function showHello(){
      echo '<i>Hello Controller</i>';
  }
}
