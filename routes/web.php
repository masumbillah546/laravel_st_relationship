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
	$st ="<a href='/student'>Student list</a><br>";
	$st .="<a href='/result'>Result list</a>";
    return $st;
});

Route::resource('/student','StudentController');
Route::resource('/result','ResultController');
