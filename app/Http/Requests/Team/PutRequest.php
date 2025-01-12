<?php

namespace App\Http\Requests\Team;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
        ];
    }

    
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un string',
            'name.max' => 'El nombre no debe tener mas de 255 caracteres',
            'description.string' => 'La descripcion debe ser un string',
        ];
    }

}