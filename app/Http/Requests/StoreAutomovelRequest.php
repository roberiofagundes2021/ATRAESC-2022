<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutomovelRequest extends FormRequest
{
     public function authorize()
    {
        return TRUE;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //
            'nome'=>'required',
            'marca'=>'required',
            'modelo'=>'required',
            'placa'=>'required',
        
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'nome.required'=>'Campo nome obrigatorio',
            'marca.required'=>'Campo marca obrigatorio',
            'modelo.required'=>'Campo modelo obrigatorio',
            'placa.required'=>'Campo placa obrigatorio',    
        ];
    }

}
