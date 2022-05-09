<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreFeriadoRequest extends FormRequest
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
            'data'=>'required',    
        ];

        if (empty('nome.required')) {
                return redirect()->route('empresa.validacao');
            }

         
    }

    public function messages(){
        return [
            'nome.required'=>'Campo nome do feriado e obrigatorio',
            'data.required'=>'Campo data e obrigatorio',
        ];
    }
}
