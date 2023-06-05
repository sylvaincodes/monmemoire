<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Filiere;

class FiliereRepository
{
	/**
	 * Display a listing of the table.
	 *
	 */
	public function all()
	{
		$path = \Route::current()->uri;
		$filieres = Filiere::paginate(6);
		$filieres->withPath('/' . $path);
		return $filieres;
	}
}