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
	public function all()
	{
		$path = \Route::current()->uri;
		$users = User::paginate(5);
		$users->withPath('/' . $path);
		return $users;
	}

	/**
	 * Display a listing of the table.
	 *
	 */
	public function last_users()
	{
		$users = \DB::table('users')
			// ->join('documents', 'users.id', '=', 'documents.user_id')
			->orderBy('users.id', 'desc')
			->select('users.*')
			->where('users.type', 'internaute')
			->limit(5)
			->get();
		return $users;
	}
}