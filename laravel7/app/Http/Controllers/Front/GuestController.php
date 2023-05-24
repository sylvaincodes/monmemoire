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
        return view('front.guest.welcome');
    }

}