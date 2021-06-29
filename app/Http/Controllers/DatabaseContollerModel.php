<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\student;


class DatabaseContollerModel extends Controller
{
    
    // public function loadview()
    // {
    //     return view('home');
    // }




    // CODE TO GET INFO FROM MODEL->student file to display database info
function test(){
    return student::all();
}


}
