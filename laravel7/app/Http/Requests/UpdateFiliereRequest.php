<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdateFiliereRequest extends FormRequest
{
    /**
     * Determine if the filiere is authorized to make this request.
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
        $filiere = $this->route('filiere');
        return [
            'libelle' => 'required|max:191|unique:filieres,libelle', Rule::unique('filieres')->ignore($filiere->id),
            'description' => 'nullable|string|max:191'
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
            'libelle' => 'Libellé',
            'description' => 'Description'
        ];
    }
}