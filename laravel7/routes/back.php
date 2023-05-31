<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Back Routes
|--------------------------------------------------------------------------
|
| Here is where you can register Back routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes disponibles sans authentiication
Auth::routes();


// Routes pour les administrateurs
Route::group([ 'namespace' => 'Back' , 'prefix' => 'back' , 'as' => 'back.' ,'middleware' => 'is_admin'  ] , function(){
    
    // Routes pour les administrateurs connectés
    Route::group([ 'middleware' => 'auth'  ] , function(){
        
        Route::get('/home', 'HomeController@index')->name('home');
    
    });

    Route::resource('users',UserController::class);

});