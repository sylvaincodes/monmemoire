<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateUserRequest extends FormRequest
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
        $user = $this->route('user');
        return [
            'email' => 'nullable|max:191|unique:users,email', Rule::unique('users')->ignore($user->id),
            'type' => 'nullable',
            'nom' => 'nullable|alpha|max:191',
            'prenom' => 'nullable|alpha|max:191',
            'adresse' => 'nullable|string|max:191',
            'telephone' => 'nullable|string|max:191',
            'filiere' => 'nullable|string|max:191',
            'matricule' => 'nullable|string|max:191',
            'whatsapp' => 'nullable|string|max:191',
            'is_verified' => 'nullable',
            'email_verified_at' => 'nullable',
            'password' => 'nullable|confirmed' //confirmed : password_confirmation must be nullable 
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
            'email' => 'Adresse email',
            'type' => 'Type',
            'nom' => 'Nom',
            'prenom' => 'Prénom',
            'adresse' => 'Adresse',
            'telephone' => 'Téléphone',
            'filiere' => 'Filère',
            'matricule' => 'Matricule',
            'whatsapp' => 'Whatsapp',
            'is_verified' => 'Est vérifié',
            'email_verified_at' => 'Est vérifié à',
            'password' => 'Mot de passe'
        ];
    }
}