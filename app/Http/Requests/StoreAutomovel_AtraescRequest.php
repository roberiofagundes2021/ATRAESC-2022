<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAutomovel_AtraescRequest extends FormRequest
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
            'marca'=>'required',
            'modelo'=>'required',
            'placa'=>'required',
            'ano'=>'required',
            'cor'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'marca.required'=>'Campo marca obrigatorio',
            'modelo.required'=>'Campo modelo obrigatorio',
            'placa.required'=>'Campo placa obrigatorio',   
            'ano.required'=>'Campo ano obrigatorio', 
            'cor.required'=>'Campo cor obrigatorio',  
        ];
    }
}
