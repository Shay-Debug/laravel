<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// THIS CODE WILL ALLOW USERS WHEN THEY ENTER AN ADDL INFO THE URL IT WILL APPEAR ON THE SCREEN
//REFER TO WEB.PHP
class Parameter extends Controller
{

    // To call on regular prac page without the use of $name veriable to pass argument


    // public function loadview(){
       
    //         return view('prac');

    // }


    


    // PASSING PARAMETER THROUGH CONTROLLER SEE WEB.PHP
//     public function loadview(){
       
//         return view('prac',['name'=>'trainer', 'trainer2']);
    // }


    // PASSING ELSE IF STATEMENTS

    // public function loadview(){
       
//     return view('prac',['name'=>'5']);
    // }





    // FOREACH ARRAY REFER TO PRAC

    public function loadview()
    {
        return view('prac', ['name'=>['5', '1', '2']]);
    }
}