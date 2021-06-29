<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Construct extends Controller

{
    //
    public $butter = "hello";
    public function __construct(){
    

        // $this->butter=$butter;
        echo $this->butter;


    }
}

 $shay= new Construct("hello");

    



    
?>
