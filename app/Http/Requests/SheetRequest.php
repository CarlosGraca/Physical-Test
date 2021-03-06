<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SheetRequest extends FormRequest
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
            'objective' => 'required',
            'type_student' => 'required',
            'training_days' => 'required',
            'date_start' => 'required',
        ];
    }
}
