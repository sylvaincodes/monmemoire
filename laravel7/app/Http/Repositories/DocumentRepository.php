<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Document;

class DocumentRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $documents = Document::paginate(5);
        $documents->withPath('/'.$path);
        return $documents;
	}
}

