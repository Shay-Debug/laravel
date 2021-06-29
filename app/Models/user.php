<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{

    // THIS CODE WILL SPECIIFY WHICH TABLE THE CONTROLLER SHOULD ECHO DATA FROM INSTEAD OF PULLING DATA FROM THE DEFAULT TABLE STUDENTS
// SPECIFIC TO A TABLE
    use HasFactory;

// public $table='myaudience';


// This prevents laravel from adding etra colomn to your form so that you don't receive an error
public $timestamps=false;

}

