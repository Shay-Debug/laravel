<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\user;



class Useradd extends Controller
{
    //
    //     public function loadview()
    // {
    //     return view('home');
    // }
 

    // CODE TO ADD FORM INFO TO DATABASE***SEE DBForm BLADE***
    function addData(Request $req){

    $forminfo=new user;
    $forminfo->id=$req->id;
    $forminfo->name=$req->name;
    $forminfo->age=$req->age;
    $forminfo->address=$req->address;
    $forminfo->email=$req->email;
    $forminfo->save();
    return view('home');
    }
}
