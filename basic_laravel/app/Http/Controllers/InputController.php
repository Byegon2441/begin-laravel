<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InputController extends Controller
{
    function inputName($name){
        echo '<input type="text" name="name" id="name" value="'.$name.'">';
    }//inputName

    function showProduct($product){
       // echo "<script>alert('Show : '+ '$product')</script>";
       phpinfo();
    }
}

