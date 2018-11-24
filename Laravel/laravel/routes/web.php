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

Route::get('/test', function () {
    echo "<h1 align='center'>Route is working<h1>";
});

//Test Route Parameter
Route::get('/test/{id}', function($id) {
    echo "<h1 align='center'>ID You Have Sent Through URL is : ".$id."<h1>";
});
