<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\user;

class UserDelete extends Controller
{
    //

    // public function loadview()
    // {
    //     return view('home');
    // }



    // Checking if data base info is displaying in the webpage


//     function test(){
//     return user::all();
// }


// CODE TO DISPLAY  DATABASE INFO INTO TABLE FORMAT BY STORING INFO INSIDE A VARIABLE

function test(){
     $data=user::all();

      return view('UserDelete',['datastorage'=>$data]);
     }




    // CODE TO DELETE USER ***REFER UserDelete Blade***

function delete($id){
    $data=user::find($id);
    $data->delete();
    return redirect("UserDelete");

}   




// UPDATING USER INFO

// CODE TO ROUTE TO SPECIFIC ID

// function showdata($id){
//     return user::find($id);
// }

// Code to retrive form data for Editing ind=side form **UserEdit BLADE** **UserDelete***
function showdata($id){
    $data=user::find($id);
    return view('UserEdit',['data'=>$data]);
}



function updatedata(Request $req){
    // return $req->input();
    $data=user::find($req->id);
    $data->name=$req->name;
    $data->age=$req->age;
    $data->address=$req->address;
    $data->email=$req->email;
    $data->save();
    return redirect('UserDelete');
    
}

}








