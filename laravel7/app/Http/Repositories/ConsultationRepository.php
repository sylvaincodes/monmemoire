<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Consultation;

class ConsultationRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $consultations = Consultation::paginate(5);
        $consultations->withPath('/'.$path);
        return $consultations;
	}
}

