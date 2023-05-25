<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

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
            'titre'=> 'required|string|max:191',
            'resume'=> 'required|string|max:1000',
            'description_courte'=> 'required|string|max:1000',
            'description_longue'=> 'required|string|max:1000',
            'thumball'=> 'required|file|mimes:jpg,bmp,png',
            'pdf'=> 'required|file|mimes:pdf',
            'doc'=> 'requiredfile|mimes:doc',
            'preuve'=> 'required|file|mimes:jpg,bmp,png,pdf,doc',
            'status'=> 'required'
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
            'titre'=> 'Titre',
            'resume'=> 'Résumé',
            'description_courte'=> 'Description courte',
            'description_longue'=> 'Description longue',
            'thumball'=> 'Image de couverture',
            'pdf'=> 'PDF',
            'doc'=> 'DOC',
            'preuve'=> 'Preuve',
            'status'=> 'Status'
        ];
    }
}
