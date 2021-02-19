<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Grocery;
use App\Http\Requests\StoreRequest;


class StoresController extends Controller
{
    public function findProductPrice(StoreRequest $request){
      
        $order = new Grocery();
        $order->name = $request->input('name');
        $order->email = $request->input('email');
        $order->product = $request->input('product');
        $order->message = $request->input('message');
        $order->save();
      return redirect()->route('home')->with('status', "Message was sent");
    }


    public function index(){
      $order = Grocery::all();
      return view('productIndex', ['orders' => $order]);
     }
   
}
