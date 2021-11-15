<?php

namespace App\Http\Requests\Client;
use Illuminate\Foundation\Http\FormRequest;

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
     * @return array
     */
    public function rules()
    {
        return [
            'name'=>'string|required|max:255', 
            'dni'=>'string|required|unique:clients|min:10|max:10',
            'ruc'=>'string|required|unique:clients|min:13|max:13',
            'address'=>'string|required|max:255',
            'phone'=>'string|required|unique:clients|min:10|max:10',
            'email'=>'string|required|unique:clients|max:255|email:rfc,dns',
        ];
    }
    public function messages()
    {
        return[
            'nombre.string'=>'El valor no es correcto.',
            'nombre.required'=>'Este campo es requerido.',
            'nombre.max'=>'Solo se permite 255 caracteres.',

            'dni.string'=>'El valor no es correcto.',
            'dni.required'=>'Este campo es requerido.',
            'dni.unique'=>'Ya se encuentra registrado.',
            'dni.min'=>'Se requiere de 10 caracteres.',
            'dni.max'=>'Solo se permiten 10 caracteres.',

            'ruc.string'=>'El valor no es correcto.',
            'ruc.required'=>'Este campo es requerido.',
            'ruc.unique'=>'Ya se encuentra registrado.',
            'ruc.min'=>'Se requiere de 13 caracteres.',
            'ruc.max'=>'Solo se permiten 13 caracteres.',
            
            'address.string'=>'El valor no es correcto.',
            'address.required'=>'Este campo es requerido.',
            'address.max'=>'Solo se permiten 255 caracteres.',

            'phone.string'=>'El valor no es correcto.',
            'phone.required'=>'Este campo es requerido.',
            'phone.unique'=>'Ya se encuentra registrado.',
            'phone.min'=>'Se requiere de 10 caracteres.',
            'phone.max'=>'Solo se permiten 10 caracteres.',

            'email.string'=>'El valor no es correcto.',
            'email.required'=>'Este campo es requerido.',
            'email.unique'=>'Ya se encuentra registrado.',
            'email.max'=>'Solo se permiten 255 caracteres.',
            'email.email'=>'No es un correo electrónico.',


        ];
    }
}
