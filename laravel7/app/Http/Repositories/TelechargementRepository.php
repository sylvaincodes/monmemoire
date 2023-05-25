<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Telechargement;

class TelechargementRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $telechargements = Telechargement::paginate(5);
        $telechargements->withPath('/'.$path);
        return $telechargements;
	}
}

