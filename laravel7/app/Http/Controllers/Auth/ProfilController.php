<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Repositories\UserRepository;

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
    public function __construct(UserRepository $userRepository)
    {
        $this->UserRepository = $userRepository;
        $this->middleware('auth');
    }


    /**
     * show form edit.
     *
     */
    public function profilForm()
    {
        $user = \Auth::user();
        return view('front.forms.profils.editprofil', compact('user'));
    }

    /**
     * edit user.
     * @return \Illuminate\Http\Response
     * 
     */
    public function profilUpdate(Request $request)
    {

        $validations = $request->validate([
            'nom' => 'nullable|alpha|max:191',
            'prenom' => 'nullable|alpha|max:191',
            'adresse' => 'nullable|string|max:191',
            'telephone' => 'nullable|string|max:191',
            'filiere' => 'nullable|string|max:191',
            'matricule' => 'nullable|string|max:191',
            'whatsapp' => 'nullable|string|max:191',
            'password' => 'nullable|confirmed'
        ]);


        $user = User::find($request->id);

        try {
            $user->update($request->all());
            // Notification view
            notify()->success(__('alerts.update_save'), __('alerts.success_title'));

        } catch (\Throwable $th) {
            // Notification view
            notify()->success(__('alerts.update_error'), __('alerts.success_error'));

        }

        //logging
        \Log::channel('front')->info(__('messages.userlogged'), ['user_id' => $user->id]);

        // Redirection retour sur la page précédente
        return redirect()->back();
    }

    /**
     * show telechargements list.
     * 
     */
    public function showTelechargementsForUser()
    {
        $telechargements = \Auth::user()->telechargements()->paginate(6);
        return view('front.tables.telechargements.list', compact('telechargements'));
    }

    /**
     * show telechargements list.
     * 
     */
    public function showDocumentsForUser()
    {
        $documents = \Auth::user()->documents()->paginate(6);
        return view('front.tables.documents.list', compact('documents'));
    }

}