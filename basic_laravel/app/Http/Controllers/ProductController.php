<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class ProductController extends Controller
{
     function con(){
        //return 'Controller :ProductController<br>Method:con';
        //$product = ['num1','num2','num3'];
        //$product = Product::all();// select all from database 
          $product = Product::paginate(15); //แบ่งหน้าละ 15 แถว

        return view('create.product',['productname' => $product]);//passing data to view //array
         //return view:product in folder create
    }
}
