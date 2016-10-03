<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SettingRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required',
            'nif' => 'required',
            'telemovel' => 'required',
            'telefone' => 'required',
            'localizacao' => 'required',
            'cod_postal' => 'required',
             'logo'=>'required',
        ];
    }
}