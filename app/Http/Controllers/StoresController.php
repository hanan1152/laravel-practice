<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StoresController extends Controller
{
    public function findProductPrice($product){
        // $price = ["apple" => 4, "mango" => 5];
        $products = \DB::table('product')->Where('name', $product)->first();
        // if (!array_key_exists($product, $price)) {
        // abort(404);
        // }
      //  dd($products);
    
    return view('singleStore', ["product" => $products]);
    }
   
}
