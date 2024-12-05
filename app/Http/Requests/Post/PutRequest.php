<?php

namespace App\Http\Requests\Post;

use Illuminate\Foundation\Http\FormRequest;

class PutRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }
    

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'title'=>'required|min:5|max:255',
            'content'=>'required|min:5',
            'category_id'=> 'required',
            'posted'=> 'required',
            "image" => "mimes:jpeg,jpg,png|max:10240",
        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'El Título es requerido',
            'content.required' => 'El Contenido es requerido',
            'category_id.required' => 'La Categoría es requerida',
            
        ];
    }
}
