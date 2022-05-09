<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreClienteRequest extends FormRequest
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
            'idade'=>'required',
            'sexo'=>'required',
            'cpf'=>'required', 
            'renach'=>'required',
            'rg'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('cliente.validacao');
            }

         
    }

    public function messages(){
        return [
            'nome.required'=>'Campo nome obrigatorio',
            'idade.required'=>'Campo idade obrigatorio',
            'sexo.required'=>'Campo sexo obrigatorio',
            'cpf.required'=>'Campo CPF obrigatorio',
            'renach.required'=>'Campo renach obrigatorio',
            'rg.required'=>'Campo RG obrigatorio',
        ];
    }

}
