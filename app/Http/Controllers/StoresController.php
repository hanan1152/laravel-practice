<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;

class StoresController extends Controller
{
    public function findProductPrice(Request $request){
      
        return $request->input('name');
    }
   
}
