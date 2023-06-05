<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Http\Repositories\DocumentRepository;
use App\Http\Repositories\FiliereRepository;
use App\Models\Consultation;
use App\Models\Telechargement;

class GuestController extends FrontController
{

    public function __construct(DocumentRepository $documentRepository, FiliereRepository $filiereRepository)
    {
        $this->DocumentRepository = $documentRepository;
        $this->FiliereRepository = $filiereRepository;
    }

    /**
     * Show the application front homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {
        $documents = $this->DocumentRepository->documentDuJour();
        return view('front.pages.welcome', compact('documents'));
    }

    /**
     * Show the application front catalogue.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalogue()
    {
        $filieres = $this->FiliereRepository->all();
        return view('front.pages.catalogue', compact('filieres'));
    }

    /**
     * Show  documentSingle.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function documentSingle($id)
    {
        // increment 

        Consultation::create(['user_id' => \Auth::user()->id, 'document_id' => $id]);
        $document = $this->DocumentRepository->document($id);
        return view('front.pages.documentsingle', compact('document'));
    }

    /**
     * download a document.
     *
     * @return \Illuminate\Contracts\Support\Renderable
    */
    public function uploaddocument()
    {
        return view('front.pages.uploaddocument');
    }

    /**
     * Show  documentSingle.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function documentsCatalogue($id)
    {
        $documents = $this->DocumentRepository->documentsByFiliere($id);
        return view('front.pages.documentsbycatalogue', compact('documents'));
    }

}