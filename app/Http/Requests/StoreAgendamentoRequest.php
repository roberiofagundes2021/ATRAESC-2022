<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgendamentoRequest extends FormRequest
{
    /public function authorize()
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
            'habilitado'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('agendamento_15_dias.validacao');
            }

         
    }

    public function messages(){
        return [
            'habilitado.required'=>'Por favor escolhar o dia',
        ];
    }
}
