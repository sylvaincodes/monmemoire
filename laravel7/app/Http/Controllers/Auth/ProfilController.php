<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Models\User;
use App\Models\Telechargement;
use Illuminate\Http\Request;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Repositories\UserRepository;
use App\Http\Repositories\DocumentRepository;

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
    public function __construct(UserRepository $userRepository, DocumentRepository $documentRepository)
    {
        $this->UserRepository = $userRepository;
        $this->DocumentRepository = $documentRepository;
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
     * @param  \App\Models\User $user
     */
    public function profilUpdate(Request $request)
    {

        $validations = $request->validate([
            'nom' => 'nullable|alpha|max:191',
            'prenom' => 'nullable|alpha|max:191',
            'adresse' => 'nullable|string|max:191',
            'telephone' => 'nullable|string|max:191',
            'filiere_id' => 'nullable|string|max:191',
            'matricule' => 'nullable|string|max:191',
            'whatsapp' => 'nullable|string|max:191',
            'password' => 'nullable|confirmed'
        ]);


        try {
            \DB::table('users')
            ->where('id', $request->id)
            ->update($request->except(['_token','_method']));
            // Notification view
            notify()->success(__('alerts.update_save'), __('alerts.success_title'));

        } catch (\Throwable $th) {
            // Notification view
            notify()->success(__('alerts.update_error'), __('alerts.success_error'));

        }

        //logging
        \Log::channel('front')->info(__('messages.userlogged'), ['user_id' => $request->id]);

        // Redirection retour sur la page précédente
        return redirect()->back();
    }

    /**
     * show telechargements list.
     * 
     */
    public function showTelechargementsForUser()
    {
        $documents = $this->DocumentRepository->documentsDownloadedByUser(\Auth::user()->id);
        return view('front.tables.telechargements.list', compact('documents'));
    }

    /**
     * show telechargements list.
     * 
     */
    public function showDocumentsForUser()
    {
        $documents = $this->DocumentRepository->documentsUser(\Auth::user()->id);
        return view('front.tables.documents.list', compact('documents'));
    }


    /**
     * Download da document.
     * 
     * @return \Illuminate\Http\Response
     */
    public function downloadDocument($id)
    {
        //PDF file is stored under project/public/download/info.pdf
        $filename = $id . "_pdf.pdf";
        $file = public_path() . "/storage/uploads/" . $filename;

        $headers = array(
            'Content-Type: application/pdf',
        );

        Telechargement::create(['user_id' => \Auth::user()->id, 'document_id' => $id,]);

        return \Response::download($file, $filename, $headers);

    }
}