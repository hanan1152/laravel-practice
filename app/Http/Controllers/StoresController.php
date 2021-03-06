<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function findProductPrice($product){
        $price = ["apple" => 4, "mango" => 5];
        if (!array_key_exists($product, $price)) {
        abort(404);
        }
    
    return view('singleStore', ["product" => $product, "price" => $price[$product]]);
    }
   
}
