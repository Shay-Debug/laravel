<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// THIS CODE WILL ALLOW USERS WHEN THEY ENTER AN ADDL INFO THE URL IT WILL APPEAR ON THE SCREEN
//REFER TO WEB.PHP
class Home extends Controller
{
    public function loadview($name=null){
       
            return view('home',['name'=>$name]);

    }
}
