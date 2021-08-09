<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    /* public function authorize()
    {
        return true;
    }
  */
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */

    public function rules()
    {
        return [
            'nombre'=>'required',
            'categoria'=>'required',
            'marca'=>'required',
            'precio_compra'=>'numeric|required',
            'stock'=>'numeric|required',
            'precio_venta'=>'numeric|required',
            'codigo'=>'required',
        ];

    }
    public function messages(){
        return [
            'nombre.required'=>'Es necesario un nombre',
            'categoria.required'=>' obligatorio',
            'marca.required'=>'Es necesario la marca',
            'precio_compra.numeric'=>'El precio compra es numerico',
            'precio_compra.required'=>'El Precio de compra es tipo entero, y obligatorio',
            'stock.numeric'=>'El stock debe ser de tipo numerico, y obligatorio',
            'precio_venta.numeric'=>'El precio de Venta debe ser de tipo numerico, y obligatorio',

        ];
    }
}
