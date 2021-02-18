<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\StoresController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/stores', function () {
    $valueReceived = request("id");
    $offers = ["lulu" => "no Promotion", "spar" => "50% off"];
    if (!array_key_exists($valueReceived, $offers)) {
        abort(404);
        }
    return view("stores", ["storeId" => $valueReceived, "offers" => $offers[$valueReceived]]);
   });

Route::get('/stores/{name}', function ($name) {
    $offers = ["lulu" => "no Promotion", "spar" => "50% off"];
    if (!array_key_exists($name, $offers)) {
        abort(404);
        }
    return view("stores", ["storeId" => $name, "offers" => $offers[$name]]);
   });

Route::get('/singleStore/{product}', [StoresController::class, "findProductPrice"]);