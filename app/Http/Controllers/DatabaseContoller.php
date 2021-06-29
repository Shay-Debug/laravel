<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// This code must be included if you want to run a database query
use Illuminate\Support\Facades\DB;

class DatabaseContoller extends Controller
{
    //
    // public function loadview()
    // {
    //     return view('home');
    // }



    // CODE TO GET DATABASE INFO PULLED FROM A TABLE

    function test()
    {
        return DB::select("select*from students");
    }

    

}
