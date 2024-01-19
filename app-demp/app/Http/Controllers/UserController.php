<?php

namespace App\Http\Controllers;
use App\Models\Userinfo;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show()
    {
        $data =Userinfo::all();
     return response()->json($data);
       // return view('home');
    }
    public function adddata( Request $req)
    {
        
        print_r($req->All());
}
}
