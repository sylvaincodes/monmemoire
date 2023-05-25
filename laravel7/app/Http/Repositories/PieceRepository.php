<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Piece;

class UserRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $pieces = Piece::paginate(5);
        $pieces->withPath('/'.$path);
        return $pieces;
	}
}

