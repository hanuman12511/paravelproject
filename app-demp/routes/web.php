<?php

use Illuminate\Support\Facades\Route;
use App\Models\userinfo;
use App\Http\Controllers\UserController;

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
Route::post('/submitform', function (Request $request) {
    $obj = new Userinfo();
    $obj->name =request('name');
   // $obj->info =request('info');
    echo $obj->name;
    echo $obj->info;
    $imageName = time().'.'.request()->image->getClientOriginalExtension();
        echo $imageName;
    request()->image->move(public_path('images'), $imageName);
    $obj->info =$imageName;
     $obj->save();
    return redirect('/submitform');
    return view('home');
});

Route::get('/submitform  ', function () {
    return view('home');
});

Route::get('/admin1  ', function () {
    return view('admin.adminpage');
});
Route::get('/logout ', function () {
    return view('admin.logout');
});
Route::get('/home', function () {
    return view('home');
});
Route::get('/page2/{name}', function ($name) {
    echo "name".$name;
});
Route::post("/register",function(){

    $obj =  Userinfo::all();
      
   
   $data= response()->json($obj);
 
    //return redirect('/register');
       
        //return view('register',compact("name"));
        return view('show',["data"=>$obj]);
});
Route::get('/register ', function () {
    return view('register');
}); 
/* Route::get('/user', [UserController::class, 'show']);
Route::post('/user', [UserController::class, 'adddata']); */
