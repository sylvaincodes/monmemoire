<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use App\Http\Repositories\DocumentRepository;

class GuestController extends FrontController
{

    public function __construct(DocumentRepository $documentRepository){
        $this->DocumentRepository =  $documentRepository;
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
        $documents = $this->DocumentRepository->documentDuJour();
        return view('front.pages.catalogue',compact('documents'));
    }
    
    /**
     * Show  documentSingle.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function documentSingle($id)
    {   
        $document = $this->DocumentRepository->document($id);
        return view('front.pages.documentsingle',compact('document'));
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
    public function documentsCatalogue()
    {   
        return view('front.pages.documentsbycatalogue');
    }


}