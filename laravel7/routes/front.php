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
Route::group([ 'namespace' => 'Front', 'name' => 'page' ,'prefix' => '' ] , function(){    
    Route::get('/','GuestController@home')->name('home');
    Route::get('/catalogue','GuestController@catalogue')->name('catalogue');
    Route::get('/documentsCatalogue','GuestController@documentsCatalogue')->name('documentsCatalogue');
    Route::get('/documentSingle','GuestController@documentSingle')->name('documentSingle');
});


// Routes pour le front
Route::group([ 'namespace' => 'Front' , 'name' => 'front' ] , function(){
    
    // Routes pour les visiteurs connectés
    Route::group([ 'prefix' => 'front', 'middleware' => 'auth' ] , function(){

        Route::group(['middleware'=>'is_user'],function ()
        {
            Route::get('/home', 'HomeController@index')->name('home');
            Route::get('/profilForm','GuestController@profilForm')->name('profilForm');
            Route::get('/profilUpdate','GuestController@profilUpdate')->name('profilUpdate');
            Route::get('/profilUpdate','GuestController@profilUpdate')->name('profilUpdate');
            Route::get('/showTelechargementsForUser','GuestController@showTelechargementsForUser')->name('showTelechargementsForUser');
            Route::get('/showDocumentsForUser','GuestController@showDocumentsForUser')->name('showDocumentsForUser');
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

