<?php

namespace App\Http\Requests\Product;

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
            'name'=>'string|required|unique:products,name,'.
            $this->route('product')->id.'|max:255',
            'image'=>'required|dimensions:min_width=100,minheight=200',
            'sell_price'=>'required|',
            'category_id'=>'integer|required|exists:App\Category_id',
            'provider_id'=>'integer|required|exists:App\Provider_id',
        ];
    }

    public function messages()
    {
        return[
            'nombre.string'=>'El valor no es correcto.',
            'nombre.required'=>'Este campo es requerido.',
            'nombre.unique'=>'El producot ya esta registrado.',
            'nombre.max'=>'Solo se permite 255 caracteres.',

            'image.required'=>'El valor no es correcto.',
            'image.dimensions'=>'Solo se permiten imágenes de 100x200 px.',

            'sell_price.required'=>'Este campo es requerido.',

            'category_id.integer'=>'El valor tiene que ser entero.',
            'category_id.required'=>'El campo es requerido.',
            'category_id.exists'=>'La categoría no existe.',

            'provider_id.integer'=>'El valor tiene que ser entero.',
            'provider_id.required'=>'El campo es requerido.',
            'provider_id.exists'=>'El proveedor no existe.',
        

        ];
    }
}
