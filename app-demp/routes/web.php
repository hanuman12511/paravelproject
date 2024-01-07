<?php

use Illuminate\Support\Facades\Route;
use App\Models\userinfo;
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
Route::post('/submitform', function () {
    $obj = new Userinfo();
    $obj->name =request('name');
    $obj->info =request('info');
    echo $obj->name;
    echo $obj->info;

    $obj->save();
});

Route::get('/page1', function () {
    return view('page');
});

Route::get('/home', function () {
    return view('home');
});
Route::get('/page2/{name}', function ($name) {
    echo "name".$name;
});
