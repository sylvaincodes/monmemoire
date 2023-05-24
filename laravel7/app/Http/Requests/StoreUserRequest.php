<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'email'=> 'required|max:191|unique:users,email',
            'type'=> 'required',
            'nom'=> 'filled|alpha|max:191',
            'prenom'=> 'filled|alpha|max:191',
            'adresse'=> 'filled|string|max:191',
            'telephone'=> 'filled|string|max:191',
            'filiere'=> 'filled|string|max:191',
            'matricule'=> 'filled|string|max:191',
            'whatsapp'=> 'filled|string|max:191',
            'is_verified'=> 'nullable',
            'email_verified_at'=> 'nullable',
            'password'=> 'required|confirmed' //confirmed : password_confirmation must be present 
        ];
    }

     /**
     * Get custom attributes for validator errors.
     *
     * @return array
     */
    public function attributes()
    {
        return [
            'email'=> 'Adresse email',
            'type'=> 'Type',
            'nom'=> 'Nom',
            'prenom'=> 'Prénom',
            'adresse'=> 'Adresse',
            'telephone'=> 'Téléphone',
            'filiere'=> 'Filère',
            'matricule'=> 'Matricule',
            'whatsapp'=> 'Whatsapp',
            'is_verified'=> 'Est vérifié',
            'email_verified_at'=> 'Est vérifié à',
            'password'=> 'Mot de passe'
        ];
    }
}
