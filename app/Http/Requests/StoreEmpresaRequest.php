<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmpresaRequest extends FormRequest
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
            'razao_social'=>'required',
            'cpnj'=>'required|cnpj',
            'solicitante'=>'required',
            'telefone'=>'required',
            'email'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'razao_social.required'=>'Campo razão social obrigatorio',
            'cpnj.required'=>'Campo cpnj obrigatorio',
            'solicitante.required'=>'Campo solicitante obrigatorio',
            'telefone.required'=>'Campo telefone obrigatorio',
            'email.required'=>'Campo email obrigatorio',
        ];
    }



}
