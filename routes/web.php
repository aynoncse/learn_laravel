<?php

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

/*Route::get ('/', function () {
   return view('welcome');
});*/

Route::get('/', function () {
return view('pages.home');
});
Route::get('/about', function () {
return view('pages.about');
});
Route::get('/contact', function () {
return view('pages.contact');
});

Route::get('/getrequest', 'requestControler@index');

Route::get('/getquery', 'getqueryController@index');
Route::get('/getstudents', 'getqueryController@getStudents');
Route::get('/getstudent', 'getqueryController@getStudent');

// /*Route::get('/', function (){
//     echo "<h2>This is Home Page</h2>";
// });*/

// Route::get('/about', function (){
//     echo "<h2> This is About Page</h2>";
// });

// Route::get('/contact', function (){
//     echo "<h2> This is Contact Page</h2>";
// });

// Route::get('users/{name?}', function($name="Masud Alam") {
//         echo 'User Name is ' . $name;
// });

// Route::get('/getall', function()
// {
// $fetcData = DB::select('select * from students');
// echo "<pre>";
// print_r($fetcData);
// echo "</pre>";
// });

// Route::get('/geturldata', 'homeController@getUrlData');

// Route::get('/hello', function (){
// 	$student = [
// 		"name" => "Aynon Bhuiyan",
// 		"age"  => 26
// 	];
//     return view("hello", $student);
// });

// Route::get('/home', 'homeController@index');

// Route::get("showage",
//   [
//     "uses"=>"showAge@index",
//     "middleware"=>"CheckAge"
//   ]);

// Route::get ('/master', function () {
//    return view('layouts/master');
// });
