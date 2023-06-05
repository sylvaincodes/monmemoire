<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;

class StoreDocumentRequest extends FormRequest
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
            'titre' => 'required|string|min:10|max:300',
            'description_courte' => 'required|string|min:50|max:1000',
            'resume' => 'required|string|min:250|max:3000',
            'thumball' => 'required|file|mimes:png,jpg',
            'pdf' => 'required|file|mimes:pdf',
            'doc' => 'required|file|mimes:docx',
            'preuve' => 'required|file|mimes:png,jpg',
            'user_id' => 'required',
            'filiere_id' => 'required',
            'status' => 'required'
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
            'titre' => 'Titre',
            'resume' => 'Résumé',
            'description_courte' => 'Description courte',
            'thumball' => 'Image de couverture',
            'pdf' => 'PDF',
            'doc' => 'DOC',
            'preuve' => 'Preuve',
            'status' => 'Status',
            'user_id' => 'Auteur',
        ];
    }
}