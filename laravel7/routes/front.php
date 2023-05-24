<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

/*
|--------------------------------------------------------------------------
| Front Routes : pour les internautes
|--------------------------------------------------------------------------
|
| Here is where you can register front routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Routes pour les visiteurs
    // namespace = pour la classe
    // name = nom de la route 
    // prefixe = url de la route
Route::group([ 'namespace' => 'Front', 'name' => 'guest' ,'prefix' => '' ] , function(){    
    Route::get('/','GuestController@home')->name('home');
});


// Routes pour le front
Route::group([ 'namespace' => 'Front' , 'name' => 'front' ] , function(){
    
    
    // Routes pour les visiteurs connectés
    Route::group([ 'prefix' => 'front', 'middleware' => 'auth' ] , function(){
        
        Route::group(['middleware'=>'is_user'],function ()
        {
            Route::get('/home', 'HomeController@index')->name('home');
        });

         //ajax Routes
         Route::group(['prefix'=>'ajax','middleware'=>'is_user'],function ()
         {

         });

         // CRUD MODULES ROUES
        //  if (Schema::hasTable('modules')) 
        //     {
        //         $modules = \DB::table('modules')
        //                 ->select('name')
        //                 ->where('guard_name','front')
        //                 ->get();
        //         foreach ($modules as $key => $module) {
        //                 Route::resource(
        //                     $module->name,
        //                     ucfirst(rtrim($module->name, 's')) . Controller::class
        //                 );
        //         }
        //     }
    });
    
});

