<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Users extends Controller
{
    
    function training(){
        
        echo "<h1>PHP with laravel training</h1>";

        echo "    <a href='/home'>Back</a>";

    }


    function withid($id){
        echo "<h1> $id </h1>";
        echo '<br>';
        echo "<h1>PHP with laravel with $id</h1>";

        echo "    <a href='/home'>Back</a>";
    }


    // Form 
    
    function getData(){
        return "Hello from IndexController()";
    }




}

?>

   
