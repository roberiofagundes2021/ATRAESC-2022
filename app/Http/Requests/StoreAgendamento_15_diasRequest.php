<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgendamento_15_diasRequest extends FormRequest
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
            'dia1'=>'required',
            'dia2'=>'required',
            'dia3'=>'required',
            'dia4'=>'required',
            'dia5'=>'required',
            'dia6'=>'required',
            'dia7'=>'required',
            'dia8'=>'required',
            'dia9'=>'required',
            'dia10'=>'required',
            'dia11'=>'required',
            'dia12'=>'required',
            'dia13'=>'required',
            'dia14'=>'required',
            'dia15'=>'required',
            'automovel_id'=>'required',
     
        ];

        if (empty('nome.required')) {
                return redirect()->route('agendamento_15_dias.validacao');
            }

         
    }

    public function messages(){
        return [
            'dia1.required'=>'Por favor escolhar o dia',
            'dia2.required'=>'Por favor escolhar o dia',
            'dia3.required'=>'Por favor escolhar o dia',
            'dia4.required'=>'Por favor escolhar o dia',
            'dia5.required'=>'Por favor escolhar o dia',
            'dia6.required'=>'Por favor escolhar o dia',
            'dia7.required'=>'Por favor escolhar o dia',
            'dia8.required'=>'Por favor escolhar o dia',
            'dia9.required'=>'Por favor escolhar o dia',
            'dia10.required'=>'Por favor escolhar o dia',
            'dia11.required'=>'Por favor escolhar o dia',
            'dia12.required'=>'Por favor escolhar o dia',
            'dia13.required'=>'Por favor escolhar o dia',
            'dia14.required'=>'Por favor escolhar o dia',
            'dia15.required'=>'Por favor escolhar o dia',
            'automovel_id.required'=>'Por favor escolhar o automovel',
        ];
    }

}
