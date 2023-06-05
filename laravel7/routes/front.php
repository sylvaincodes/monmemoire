<?php

use App\Http\Controllers\Back\UserController;
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
Route::group(['namespace' => 'Front', 'as' => 'page.'], function () {
    Route::get('/acceuil', 'GuestController@home')->name('home');
    Route::get('/catalogue', 'GuestController@catalogue')->name('catalogue');
    Route::get('/documentsCatalogue/{id}', 'GuestController@documentsCatalogue')->name('documentsCatalogue');
    Route::get('/documentSingle/{id}', 'GuestController@documentSingle')->name('documentSingle');
});

// Routes pour le front
Route::group(['as' => 'front.', 'prefix' => 'front', 'middleware' => 'is_user'], function () {

    // Routes pour les visiteurs connectés
    Route::group(['namespace' => 'Front', 'middleware' => 'auth'], function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::post('/uploaddocument', 'DocumentController@uploaddocument')->name('documentSingle');

        Route::get('/uploaddocument', 'GuestController@uploaddocument')->name('uploaddocument');

        //ajax Routes
        Route::group(['prefix' => 'ajax'], function () {
            // Route::get('/piecesSearch', 'PieceController@ajaxSearch')->name('ajax.piecesSearch');
        });


        //  CRUD MODULES ROUES   
        if (Schema::hasTable('modules')) {
            $modules = \DB::table('modules')
                ->select('name')
                ->where('guard_name', 'front')
                ->get();
            foreach ($modules as $key => $module) {
                Route::resource(
                    $module->name,
                    ucfirst(rtrim($module->name, 's')) . Controller::class
                );
            }
        }


    });

    // Routes pour l'auth
    Route::group(['namespace' => 'Auth'], function () {
        Route::get('/profilForm', 'ProfilController@profilForm')->name('profilForm');
        Route::put('/profilUpdate', 'ProfilController@profilUpdate')->name('profilUpdate');
        Route::get('/mesdocuments', 'ProfilController@showDocumentsForUser')->name('showDocumentsForUser');
        Route::get('/mestelechargements', 'ProfilController@showTelechargementsForUser')->name('showTelechargementsForUser');
        Route::get('/downloadDocument/{id}', 'ProfilController@downloadDocument')->name('downloadDocument');
    });


});