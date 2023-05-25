<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;

class ProfilController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Profil Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles editing data for users.
    |
    */


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    } 
    
    /**
      * show form edit.
      *
     */
    public function profilForm()
    {
        return view('front.forms.profils.editprofil');
    }
    
    /**
     * edit user.
     * @param  \Illuminate\Http\Request  $request
     * @param  User $user
     * @return \Illuminate\Http\Response
     * 
     */
    public function profilUpdate($user)
    {
        // Redirection retour sur la page précédente
        return redirect()->back();
    }

    /**
     * show telechargements list.
     * 
     */
    public function showTelechargementsForUser()
    {
        return view('front.tables.telechargements.list');
    }
    
    /**
     * show telechargements list.
     * 
     */
    public function showDocumentsForUser()
    {
        return view('front.tables.documents.list');
    }

}
