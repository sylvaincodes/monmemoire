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
	public function all()
	{
		$path = \Route::current()->uri;

		$documents = \DB::table('documents')
			->join('users', 'documents.user_id', '=', 'users.id')
			->join('filieres', 'documents.filiere_id', '=', 'filieres.id')
			->orderBy('documents.id', 'desc')
			->select('documents.*', 'users.id as id_auteur', 'users.nom as nom_auteur', 'users.prenom as prenom_auteur', 'filieres.libelle as filiere')
			->paginate(6);

		$documents->withPath('/' . $path);
		return $documents;
	}

	/**
	 * Display a listing of the table.
	 *
	 */
	public function documentsUser($user_id)
	{
		$path = \Route::current()->uri;

		$documents = \DB::table('documents')
			->leftJoin('consultations', 'documents.id', '=', 'consultations.document_id')
			->orderBy('documents.id', 'desc')
			->groupBy('documents.id')
			->selectRaw('count(consultations.document_id) as vues,documents.*')
			->where('documents.user_id', $user_id)
			->paginate(3);

		$documents->withPath('/' . $path);
		return $documents;
	}


	/**
	 * Display a listing of the table.
	 *
	 */
	public function documentsDownloadedByUser($user_id)
	{
		$path = \Route::current()->uri;

		$documents = \DB::table('documents')
			->Join('telechargements', 'documents.id', '=', 'telechargements.document_id')
			->orderBy('documents.id', 'desc')
			->groupBy('documents.id')
			->selectRaw('count(telechargements.document_id) as telechargements,documents.*')
			->where('telechargements.user_id', $user_id)
			->paginate(3);

		$documents->withPath('/' . $path);
		return $documents;
	}

	/**
	 * Display a listing of the table.
	 *
	 */
	public function one($document)
	{
		$path = \Route::current()->uri;

		$document = \DB::table('documents')
			->join('users', 'documents.user_id', '=', 'users.id')
			->join('filieres', 'documents.filiere_id', '=', 'filieres.id')
			->orderBy('documents.id', 'desc')
			->select('documents.*', 'users.id as id_auteur', 'users.nom as nom_auteur', 'users.prenom as prenom_auteur', 'users.avatar', 'filieres.libelle as filiere')
			->where('documents.id', $document->id)
			->first();

		return $document;
	}

	/**
	 * List des documents du jour
	 *
	 */
	public function documentDuJour()
	{
		$path = \Route::current()->uri;

		$documents = \DB::table('documents')
			->leftJoin('consultations', 'documents.id', '=', 'consultations.document_id')
			->orderBy('documents.id', 'desc')
			->groupBy('documents.id')
			->selectRaw('count(consultations.document_id) as vues,documents.*')
			->where('documents.status', "valide")
			->paginate(3);


		$documents->withPath('/' . $path);
		return $documents;
	}
	
	/**
	 * List des documents du jour
	 *
	 */
	public function documentsByFiliere($filiere_id)
	{
		$path = \Route::current()->uri;

		$documents = \DB::table('documents')
			->leftJoin('consultations', 'documents.id', '=', 'consultations.document_id')
			->orderBy('documents.id', 'desc')
			->groupBy('documents.id')
			->selectRaw('count(consultations.document_id) as vues,documents.*')
			->where('documents.status', "valide")
			->where('documents.filiere_id', $filiere_id)
			->paginate(3);


		$documents->withPath('/' . $path);
		return $documents;
	}

	/**
	 * Lire un document
	 *
	 */
	public function last_documents()
	{
		$document = \DB::table('documents')
			->join('users', 'documents.user_id', '=', 'users.id')
			->join('filieres', 'documents.filiere_id', '=', 'filieres.id')
			->orderBy('documents.id', 'desc')
			->select('documents.*', 'users.id as id_auteur', 'users.nom as nom_auteur', 'users.prenom as prenom_auteur', 'users.avatar', 'filieres.libelle as filiere')
			->limit(3)
			->get();

		return $document;
	}

	/**
	 * 3 derniers document
	 *
	 */
	public function three_last_document()
	{
		$documents = document::find();
		return $documents;
	}

	public function document($id)
	{
		$document = \DB::table('documents')
			->leftJoin('consultations', 'documents.id', '=', 'consultations.document_id')
			->rightJoin('users', 'documents.user_id', '=', 'users.id')
			->orderBy('documents.id', 'desc')
			->groupBy('documents.id')
			->selectRaw('count(consultations.document_id) as vues,documents.*,users.nom as nom_auteur , users.prenom as prenom_auteur')
			->where('documents.id', $id)
			->first();

		return $document;
	}
}