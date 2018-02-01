<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FilmFormRequest extends FormRequest
{

    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'titulo'=>'required|min:2',
            'descripcion'=>'required|min:10',
            'director'=>'required|min:3',
        ];
    }
}
