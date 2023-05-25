<?php 

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;

class GuestController extends FrontController
{

    public function __construct(){

    }

    /**
     * Show the application front homepage.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function home()
    {   
        return view('front.pages.welcome');
    }
    
    /**
     * Show the application front catalogue.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function catalogue()
    {   
        return view('front.pages.catalogue');
    }
    
    /**
     * Show  documentSingle.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function documentSingle()
    {   
        return view('front.pages.documentsingle');
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