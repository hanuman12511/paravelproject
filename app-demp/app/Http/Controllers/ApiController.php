<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Userinfo;
class ApiController extends Controller
{
    //
    public  function ProductShow(){
        return $data =Userinfo::all();
        return response()->json($data);;
    }
    public  function ProductInsert(Request $req){
        $obj = new Userinfo();
        $obj->name =request('name');
        $obj->info =request('info');
        $obj->save();
        return["returl"=>"Data Seve successfull","data"=>$req->$obj];
    }
}
