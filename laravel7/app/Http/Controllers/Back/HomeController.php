<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use App\Http\Repositories\DocumentRepository;
use App\Http\Repositories\UserRepository;
use App\Models\Document;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    public function __construct(DocumentRepository $documentRepository, UserRepository $userRepository)
    {
        $this->middleware('auth');
        $this->DocumentRepository = $documentRepository;
        $this->UserRepository = $userRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documents = Document::all();
        $publications= \DB::table('documents')->count();
        $telechargements= \DB::table('telechargements')->count();
        $consultations= \DB::table('consultations')->count();
        $last_documents = $this->DocumentRepository->last_documents();
        $last_users = $this->UserRepository->last_users();

        return view('back.home', compact('last_documents','last_users', "documents",'consultations','telechargements','publications'));
    }
}