<?php

namespace App\Http\Requests;
use Illuminate\Support\Facades\Validator;
use App\Models\Agendamento_3_dias;
use Illuminate\Validation\Rule;
use App\Rules\datasiguais;
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
            'dia1'=>'required',
            'dia2'=>'required',
            'dia3'=>'required',
            'automovel_id'=>'required',

            
            
        ];

         $this->validate($request, [
    'dia1'=>'required'.Rule::unique('agendamento_3_dias')->where(function($query){
    $query->where('automovel_id', Auth::user()->id);}),
    ]);
         
    }


         

     

    public function messages(){
        return [
            'dia1.required'=>'Por favor escolhar o dia',
            'dia2.required'=>'Por favor escolhar o dia',
            'dia3.required'=>'Por favor escolhar o dia',
            'automovel_id.required'=>'Por favor escolhar o automovel',
        ];
    }

}
