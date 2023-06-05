<?php

namespace App\Http\Controllers\Front;

use Illuminate\Http\Request;
use App\Http\Controllers\Front\FrontController;
use App\Http\Repositories\DocumentRepository;
use App\Http\Repositories\FiliereRepository;
use App\Models\Telechargement;

class HomeController extends FrontController
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(DocumentRepository $documentRepository, FiliereRepository $filiereRepository)
    {
        $this->DocumentRepository = $documentRepository;
        $this->FiliereRepository = $filiereRepository;
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $documents = $this->DocumentRepository->documentsUser(\Auth::user()->id);
        return view('front.home', compact('documents'));
    }

   
}