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

Route::get('/', function () {
    return view('welcome');
});
Route::get("/home", function() {
    return "<h1>This is home page</h1>" ;
});
Route::get("/blog/{page_id}", function($page_id) {
    return "<h1>This is blog page : {$page_id} </h1>" ;
});
Route::get( "/blog/{page_id}/edit" , function($page_id) {
    return "<h1>This is blog page : {$page_id} for edit</h1>" ;
});
Route::get("/product/{a}/{b}/{c}", function($a, $b, $c) {
    return "<h1>This is product page </h1><div>{$a} , {$b}, {$c}</div>" ;
});
Route::get("/hello", function () {	
    return view("hello");
    });
    Route::get('/greeting', function () {
        $data = [
    'name'      => 'James' ,
    'last_name' => 'Mars'
    ];
    return view('greeting', $data);
    });    