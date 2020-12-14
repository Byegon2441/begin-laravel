<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
     function con(){
        //return 'Controller :ProductController<br>Method:con';
        $product = ['num1','num2','num3'];

        return view('create.product',['productname' => $product]);//passing data to view //array
         //return view:product in folder create
    }
}
