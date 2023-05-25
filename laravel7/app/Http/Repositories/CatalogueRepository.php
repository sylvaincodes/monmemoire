<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Catalogue;

class CatalogueRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $catalogues = Catalogue::paginate(5);
        $catalogues->withPath('/'.$path);
        return $catalogues;
	}
}

