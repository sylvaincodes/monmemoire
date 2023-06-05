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

Route::get('linkstorage', 'Back\BackController@storage')->name('linkstorage');
Route::get('get-firebase-data', 'Back\FirebaseController@index')->name('firebase.index');
Route::get('back/ajax/users/search', 'Back\UserController@ajaxSearchUser')->name('ajax.users');
Route::get('back/ajax/filieres/search', 'Back\FiliereController@ajaxSearchFiliere')->name('ajax.filieres');
Route::get('back/ajax/documents/search', 'Back\DocumentController@ajaxSearchDocument')->name('ajax.documents');

Route::group([
    'namespace' => 'Back',
    'prefix' => 'back',
    'as' => 'back.',
    'middleware' => 'auth'
], function () {
    Route::resource('documents', DocumentController::class)->only([
        'store'
    ]);
});

// Routes pour les administrateurs
Route::group(['middleware' => 'auth'], function () {


    Route::group([
        'namespace' => 'Back',
        'prefix' => 'back',
        'as' => 'back.',
        'middleware' => 'is_admin'
    ], function () {

        // Routes pour les administrateurs connectés
        Route::get('/home', 'HomeController@index')->name('home');
        Route::resource('users', UserController::class);
        Route::resource('catalogues', CatalogueController::class);
        Route::resource('documents', DocumentController::class)->except([
            'store'
        ]);
        Route::resource('filieres', FiliereController::class);

    });
});