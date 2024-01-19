<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/page3', function () {
    echo "name";
});

Route::post('/page4/{name}', function ($name) {
    echo "name".$name;
});

Route::post('/register', function (Request $request) {
    $email = strrev($request->input('email'));
    return $reversed;
  });


  Route::get("/product",[ApiController::class,"ProductShow"]);
  Route::post("/productinsert",[ApiController::class,"ProductInsert"]);
