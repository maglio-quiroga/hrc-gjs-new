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
            'position' => 'required|string|max:255',
            'description' => 'nullable|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }

    
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.string' => 'El nombre debe ser un string',
            'name.max' => 'El nombre no debe tener mas de 255 caracteres',
            'description.string' => 'La descripcion debe ser un string',
            'image.mimes' => 'El archivo debe ser una imagen.',
            'image.max' => 'El archivo debe tener un tamaño máximo de 2MB.',
        ];
    }

}