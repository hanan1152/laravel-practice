<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class StoresController extends Controller
{
    public function findProductPrice($product){
        //let me see i did in my project i belive
        $pd = Grocery::where('name', $product)->firstOrFail();
      //  dd($pd);//its the naming convention error bcz laravel main table names plural ho jatay hain u have to use protected
        //

        return view('singleStore', ["product" => $pd]);
    }
   
}
