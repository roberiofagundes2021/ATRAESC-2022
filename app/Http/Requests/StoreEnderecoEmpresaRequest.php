<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoEmpresaRequest extends FormRequest
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
            'pais'=>'required',
            'estado'=>'required',
            'cidade'=>'required',
            'bairro'=>'required',
            'rua'=>'required',
            'numero'=>'required',
            'qtd_dias_agendado'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'pais.required'=>'Campo País obrigatorio',
            'estado.required'=>'Campo Estado obrigatorio',
            'cidade.required'=>'Campo Cidade obrigatorio',
            'bairro.required'=>'Campo Bairro obrigatorio',
            'rua.required'=>'Campo Rua obrigatorio',
            'numero.required'=>'requiredCampo Numero obrigatorio',
            'qtd_dias_agendado.required'=>'Campo Quantidade de dias obrigatorio',
        ];
    }

}
