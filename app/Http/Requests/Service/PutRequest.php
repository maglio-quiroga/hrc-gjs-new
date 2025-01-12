<?php

namespace App\Http\Requests\Service;
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
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ];
    }
    
    public function messages()
    {
        return [
            'name.required' => 'El nombre es requerido.',
            'description.required' => 'La descripción es requerida.',
            'image.required' => 'La imagen es requerida.',
            'image.mimes' => 'El archivo debe ser una imagen.',
            'image.max' => 'El archivo debe tener un tamaño máximo de 2MB.',
        ];
    }
}