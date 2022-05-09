<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreInstrutorRequest extends FormRequest
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
            'cpf'=>'required',
            'rg'=>'required',    
            'habilitacao'=>'required',  
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'nome.required'=>'Campo nome obrigatorio',
            'cpf.required'=>'Campo cpf obrigatorio',
            'rg.required'=>'Campo rg obrigatorio',
            'habilitacao.required'=>'Campo habilitacao obrigatorio',
        ];
    }
}
