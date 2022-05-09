<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEnderecoClienteRequest extends FormRequest
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
            'país'=>'required',
            'estado'=>'required',
            'cidade'=>'required',
            'bairro'=>'required',
            'rua'=>'required',
            'numero'=>'required',     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'país.required'=>'Campo País obrigatorio',
            'estado.required'=>'Campo estado obrigatorio',
            'cidade.required'=>'Campo cidade obrigatorio',
            'bairro.required'=>'Campo bairro obrigatorio',
            'rua.required'=>'Campo rua obrigatorio',
            'numero.required'=>'Campo numero obrigatorio',
        ];
    }

}
