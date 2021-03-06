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
    return view('welcome_user');
})->name('index.welcome');

Route::group(['prefix' => 'admin'],function(){
	Route::resource('pokemons','pokemonsController');
	Route::resource('trainers','trainersController');	
});
