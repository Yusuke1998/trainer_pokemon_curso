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
    return view('welcome_trainer');
})->name('index.welcome');

// Route::get('Hola/{lastname?}/{firstname?}',function($lastname="Martinez",$firstname="Jose"){
// 	return "Hola ".$lastname." ".$firstname;
// });
