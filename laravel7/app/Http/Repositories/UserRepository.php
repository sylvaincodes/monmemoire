<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\User;

class UserRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $users = User::paginate(5);
        $users->withPath('/'.$path);
        return $users;
	}
}

