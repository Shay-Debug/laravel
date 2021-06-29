<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    
// Method will return form data(Whatever info you have typed in your form will be displayed once you log into your form)
    // function getData(Request $req){
    //     return $req->input();
    // }

    // This will advise user that username and password is required before they can log in.

    // function getData(Request $req){

    //     $req->validate([
    //         'username'=>'required | max:10',//max:10 means the username should have max 10 char
    //         'password'=>'required| min: 5'//pmin:5 min of 5 char for the password 
    //     ]);

    //     return $req->input();
    // }

// Array Format Of Requirements for password and username
     function getData(Request $req){

        $req->validate([
            'username'=>['required', 'max:10', 'string'],//max:10 means the username should have max 10 char
            'password'=>['required', 
            'min:6', 
            'regex:/^.*(?=.{3,})(?=.*[a-zA-Z])(?=.*[0-9])(?=.*[!$#%]).*$/', 
            ]//pmin:5 min of 5 char for the password 
        ]);

        return $req->input();
    }


    // Retruning Regular Class info via Form
    // function getData(){
    //     return "Hello from IndexController()";
    // }


}
