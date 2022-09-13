<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SerieRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'nome' => ['required', 'min:3']
        ];
    }

    public function attributes()
    {
        return [
            'nome' => 'Nome',
        ];
    }

    public function messages()
    {
        return [
            'required' => ':attribute precisa ser preenchido',
            'nome.min' => ':attribute precisa ter no mínimo :min caracteres'
        ];
    }
}
