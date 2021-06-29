<!-- THIS IS TO CODE TO USE IN BLADE IF YOU DON'T WANT TO USE THE CONTROLLER -->
<?php

use App\Http\Controllers\Controller;
class Users extends Controller
{
    
    function training(){
        
        echo "<h1>PHP with laravel training</h1>";

        echo "    <a href='/home'>Back</a>";

    }


    function withid($id){
        echo $id;
        echo '<br>';
        echo "PHP with laravel with $id";
    }
}
$users = new Users();
$users->training();


?>


   
