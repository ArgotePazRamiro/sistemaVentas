<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateProjectRequest extends FormRequest
{
    
   /*  public function authorize()
    {
        return false;
    }
 */
   
    public function rules()
    {
        return [
            'nombre'=>'required',
            'precioUnitario'=>'required',
            'marca'=>'required',
            'nSerie'=>'required',
            'stock'=>'required',
            'categoria'=>'required',
            'precioComision'=>'required',
            'estado'=>'1'
        ];
        
    }
    public function messages(){
        return [
            'nombre.required'=>'ASD',
            'precioUnitario.required'=>'El Proyecto necesita un ',
            'marca.required'=>'El Proyecto necesita un nombre',
            'stock.required'=>'El Proyecto necesita un nombre',
            'nSerie.required'=>'El Proyecto necesita un nombre',
            'categoria.required'=>'El Proyecto necesita un nombre',
            'precioComision.required'=>'El Proyecto necesita un nombre',
        ];
    }
}
