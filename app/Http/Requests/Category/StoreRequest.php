<?php

namespace App\Http\Requests\Category;

use Illuminate\Http\Response;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\ValidationException;

class StoreRequest extends FormRequest
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
     * @return array<string, mixed>
     */
    public function myrules()
    {
        return [
            'title'=>'required|min:5|max:255',
            
        ];
    }
    

    public function messages()
    {
        return [
            'title.required' => 'La Categoría es requerida',
            
        ];
    }
    public function rules()
    {
        return $this->myRules();
    
    }

}
