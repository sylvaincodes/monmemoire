<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class UpdatePieceRequest extends FormRequest
{
    /**
     * Determine if the catalogue is authorized to make this request.
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
        $catalogue= $this->route('catalogue');
        return [
            'libelle'=> 'required|max:191|unique:catalogues,libelle',Rule::unique('catalogues')->ignore($catalogue->id),
            'description'=> 'filled|string|max:191'
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
            'libelle'=> 'Libellé',
            'description'=> 'Description'
        ];
    }
}
