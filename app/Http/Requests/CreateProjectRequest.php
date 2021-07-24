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
            'precioUnitario'=>'numeric|required',
            'marca'=>'numeric|required',
            'nSerie'=>'numeric|required',
            'stock'=>'numeric|required',
            'categoria'=>'required',
            'precioComision'=>'numeric|required',
            'estado'=>'required|boolean'
        ];
        
    }
    public function messages(){
        return [
            
        ];
    }
}
