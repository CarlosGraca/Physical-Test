<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TestRequest extends FormRequest
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
          'estatura'=>'required',
          'peso'=>'required',
          'circunferencia'=>'required',
          'cintura'=>'required',
          'quadril'=>'required',
          'coxa'=>'required',
          'panturrilha'=>'required',
          'gordura'=>'required',
          'taxa_metabolica'=>'required',
          'forca_abdominal'=>'required',
          'forca_mmii'=>'required',
          'flexibilidade'=>'required',
          'forca_mmss'=>'required',
          'frequencia_card_rep'=>'required',
          'pressao_sis'=>'required',
          'pressao_dis'=>'required',
          'potencia_aerobica'=>'required',
          'dt_test'=>'required',
        ];
    }
}
