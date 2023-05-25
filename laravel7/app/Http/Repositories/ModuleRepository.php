<?php
namespace App\Http\Repositories;

use Illuminate\Support\Facades\DB;
use App\Models\Module;

class ModuleRepository
{
	/**
	* Display a listing of the table.
	*
	*/
	public function all(){
		$path=\Route::current()->uri;
        $modules = Module::paginate(5);
        $modules->withPath('/'.$path);
        return $modules;
	}
}

