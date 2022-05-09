<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreContatoClienteRequest extends FormRequest
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
            'telefone'=>'required',
            'email'=>'required',
            'celular'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'telefone.required'=>'Campo telefone obrigatorio',
            'email.required'=>'Campo email obrigatorio',
            'celular.required'=>'Campo celular obrigatorio',
        ];
    }

}
