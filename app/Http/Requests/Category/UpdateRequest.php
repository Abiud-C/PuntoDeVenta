<?php

namespace App\Http\Requests\Category;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'required|string|unique:categories,name,'.
            $this->route('category')->id.'max:50',

            'description'=>'nullable|string|max:250',
        ];
    }
    public function messages()
    {
        return[
            'name.required'=>'Este campo es requerido.',
            'name.string'=>'El valor no es correcto.',
            'name.unique'=>'Ya se encuentra registrado.',
            'name.max'=>'Solo se permite 50 caracteres.',
            'descripcion.string'=>'El valor no es correcto.',
            'descripcion.max'=>'Solo se permite 250 caracteres.',

        ];
    }
}