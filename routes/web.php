<?php

use Illuminate\Support\Facades\Route;

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

//route untuk pemanggilan view
Route::get('/', function () {
    return view('welcome');
});

//route untuk pemanggilan kata "Hello World"
route::get('/greeting', function(){
    return 'hello world';
}) -> name('greeting'); //pemberian nama pada route

//route untuk pemanggilan kata yang di beri function
route::get('/greeting/{name}', function($name){
    return 'hello you' . " " . $name;
}) -> name('greeting_with_name'); //pemberian nama pada route
