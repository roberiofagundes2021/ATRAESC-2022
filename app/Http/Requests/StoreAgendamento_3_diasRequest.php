<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAgendamento_3_diasRequest extends FormRequest
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
            'dia1'=>'required|unique:agendamento_3_dias',
            'dia2'=>'required',
            'dia3'=>'required',
            'automovel_id'=>'required',
              
        ];
     

         
    }

    public function messages(){
        return [
            'dia5.exists'=>'escolhar o dia',
            'dia1.required'=>'Por favor escolhar o dia',
            'dia2.required'=>'Por favor escolhar o dia',
            'dia3.required'=>'Por favor escolhar o dia',
            'automovel_id.required'=>'Por favor escolhar o automovel',
        ];
    }

}
