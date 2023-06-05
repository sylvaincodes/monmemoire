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
        if (\Auth::user()->type == "superadmin" || \Auth::user()->type == "admin") {
            return true;
        } else {
            return false;
        }
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
            'email' => ['required|max:191', Rule::unique('users')->ignore($user)],
            'type' => 'nullable',
            'nom' => 'nullable|alpha|max:191',
            'prenom' => 'nullable|alpha|max:191',
            'adresse' => 'nullable|string|max:191',
            'telephone' => 'nullable|digits:8|max:191|unique:users,telephone,' . $user->id,
            'filiere_id' => 'nullable|max:191',
            'matricule' => 'nullable|string|max:191|unique:users,telephone', Rule::unique('users')->ignore($user->id),
            'whatsapp' => 'nullable|digits:8|max:191|unique:users,telephone', Rule::unique('users')->ignore($user->id),
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