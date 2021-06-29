<?php

use Illuminate\Support\Facades\Route;

// THIS LINE MUST BE ADDED IN ORDER TO ROUTE CONTROLLER
use App\Http\Controllers\Users;
 use App\Http\Controllers\Home;
 use App\Http\Controllers\Construct;
 use App\Http\Controllers\IndexController;
 use App\Http\Controllers\DataBaseTableDisplay;
 use App\Http\Controllers\DatabaseContoller;
 use App\Http\Controllers\DatabaseContollerModel;
 use App\Http\Controllers\Parameter;
 use App\Http\Controllers\Useradd;
 use App\Http\Controllers\UserDelete;




/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// ROUTE TO EACH DEFAULT PAGE CODE
// Route::get('/', function () {
//     return view('home');
// });

// CODE TO ROUTE CONTROLLER TO VEIW IN WEB PAGE
// route::get("/Users",[Users::class, 'training']);



// Calling A Contruct Via Controller 
// route::get("/Construct",[Construct::class]);





// ROUTING CONTROLLER PLACED IN BLADE(User controller was placed in a blade)
//  Route::get('/Users', function () {
//     return view('Users');
// });



// Form Controller
// route::get("/IndexController",[Users::class,'getData']);

// Code to display controller page with another. The other page value will be returned once it is entered in the url
//  route::get("/Users/{id}",[Users::class,'withid']);

// Code learnt from class today
// route::get('/{name}', function($name){
//     return view('home', ['name'=>$name]);
// });


// ROUTING TO SPECIFIC PAGES


// Route::get('/home', function () {
//     return view('home');
// });




// Route::get('/about', function () {
//     return view('about');
// });


// Route::get('/contact', function () {
//     return view('contact');
// });

// PASSING VALUE INSIDE A PAGE

// Route::get('/contact', function () {
//     return view('contact', ["number"=>"876-908-258"]);
// });
//OR
// Route::get('/contact', function () {
//     $contact=["number"=>"876-908-2586"];
//     return view('contact', $contact);
// });





// Returning view(a file) from a sub-directory(A FOLDER WITHIN THE VIEW FOLDER)
Route::get('/index', function () {
    return view('VengiUpUpdate.index');
});


// Route::get('/main', function () {
//     return view('layout.main');
// });





// Single Line Code For ROUTING TO Pages
// Route::view('/contact', 'contact');

// Route::view('/', 'home');

// Route::get('/', function(){
//     return view('home');
// });

// This WILL DENY USER ACCESS TO SEE A CERTAIN PAGE BY REDIRECTING THEM TO ANOTHER WHEN THE USER SELECTS THE ABOUT HYPER LINK
// Route::get('/about', function () {
//     return redirect('prac');
// });


// TYPING WHAT YOU WANT TO DISPLAY ON A PAGE WITHOUT CREATING A FILE
// Route::get('/new', function () {
//     return "HELLO MY NAME IS BOB";
// });

// Route::get('/contact', function () {
//     return "Contact Us";
// });



// PASSING PARAMETER


// (OPTIONAL PARAMETER)Calling Page Via Id, this will allow us to navigate to multiple pages
// Route::get('/{id}', function ($id){
// echo $id;
// OR
//  return view($id);
//  });

// // This code will call the page name by passing the function veribale with the page
// Route::get('/{id}', function ($id){
// return view($id,['id1'=>$id]);
// });


//This code will allow the user once they enter any /addl info in the URL it shows on the screen
//Also if user doesn't enter any info they will be taken to the home page
// REFER TO CLASS HOME/ This will only allow you to view home

// Route::get('/{name?}',[Home::class, 'loadview']);


// PASSING PARAMETER THROUGH CONTROLLER REFER**PARAMETER CONTROLLER**
//  Route::get('/prac',[Parameter::class, 'loadview']);



// // Parameter passing REFER{PRAC} this will call the page name where ever you place it
// route::get('/{name}', function($name){
// return view('prac', ['name'=>$name]);
// });

// This page will  replace the parameter page name with whatever string is passed 
// Refer Prac.blade.php
// route::get('/prac', function(){
//     return view('prac', ['name'=>'trainer']);
// });







// PROJECT DASHBOARD ROUTING

// Form Controller
// route::get("/IndexController",[Users::class,'getData']);

// Route To Project Form
// Route::get('/index', function () {
//     return view('VengiUpUpdate.index');
// });


// Post Project Dashboard View
//Route::Post('/index', [IndexController::class,'getData']);







// Regular Form Practice
Route::get('/form', function () {
    return view('form');
});

// Post Regular Post View

Route::Post('/form', [IndexController::class,'getData']);




// Middleware Creating Of The 3 Pages : 

// Route::get('/restrict', function () {
//     return view('restrict');
// });


// Route::get('/usersmiddle', function () {
//     return view('usersmiddle');
// });

// Route::get('/', function () {
//     return view('home');
// });


// Group Middleware

// Route::get('/', function () {
//     return view('about');
// });

// route::view('/home', 'home');
// route::view('/usersmiddle', 'usersmiddle');



// CODE FOR ROUTING GROUP MIDDLEWARE


// Route::group(['middleware'=>['protectedpage']], function(){
//     route::view('/', 'home');
//     route::view('/usersmiddle', 'usersmiddle');
// });



//Code For Routing Route Middleware

// Route::get('/',  function(){
//     return view('home');

// })->middleware('protectedpage');






// How to display database info 1st Way: DATABASE CONTROLLER MSQL CODE PART ONE SEE DatabaseContoller 

//  route::get("/DatabaseContoller",[DatabaseContoller::class, 'test']);





//How to display database info 2nd Way: DATABASE CONTROLLER MSQL CODE PART 2 SEE DatabaseContollerModel and MOdel->Student File  
//   route::get('students',[DatabaseContollerModel::class,'test']);








//  DISPLAY DATABASE INFO IN TABLE FORMATE ON A SITE

// route::view('/usersmsql', 'usersmsql'); //Testing for view page(working)

//  Route::get('/DataBaseTableDisplay',[DataBaseTableDisplay::class, 'loadview']);//Controller Working


// ROUTING TO DATABSE CONTROLLER TO DISPLAY ON TABLE FORMAT. **REF: DataBaseTableDisplay Controller And usersmsql
 route::get('/DataBaseTableDisplay',[DataBaseTableDisplay::class,'test']); //Retrieving database info working






// SAVING FORM DATA TO DATABASE

// route::view('/DBForm','DBForm');//Testing for view page **working

Route::get('/DBForm', function () {
    return view('DBForm');
});




// SAVING FORM DATA USING CONTROLLER Useradd ***DBForm**

Route::post('/DBForm',[Useradd::class, 'addData']);//Controller Working


// DELETING A USER FROM THE DATABASE
// route::view('UserDelete/', 'UserDelete');//BLADE WORKING 

// ROUTE TO DISPLAY INFO IN TABLE FORMAT CONTROLLER USERDELETE AND BLADE USERDELETE
Route::get('/UserDelete',[UserDelete::class, 'test']);//Controller Working


// ROUTE TO CONTROLLER USERDELETE **USERDELETE BLADE*** **Route To Delete DB INFO ROUTE
Route::get('delete/{id?}',[Userdelete::class,'delete']);




// Updating DATABSE INFO


// Edit DATABASE INFO ROUTE **UserDelete CONTROLLER**  
Route::get('/edit/{id?}',[UserDelete::class, 'showdata']); //Controller Working


// Updating DB INFO BLADE  **SEE UserDelete CONTROLLER*** **REQUEST**
Route::post('edit',[UserDelete::class, 'updatedata']);//Controller Working



















