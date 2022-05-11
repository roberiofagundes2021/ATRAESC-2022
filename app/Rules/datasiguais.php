<?php

namespace App\Rules;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use Illuminate\Contracts\Validation\Rule;
use App\Models\Agendamento_3_dias;

class datasiguais implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

   
    public function passes($attribute, $value )
    {
        $agendamento_3_dias1= Agendamento_3_dias::all();
            
             foreach($agendamento_3_dias1 as $agend_3_dias){


                 if(($agend_3_dias->dia1 == $value->dia1) or ($agend_3_dias->dial2 == $value->dia1) or ($agend_3_dias->dia3== $value->dia1) ){
                   
                 
                  return ('ja temos agendamento para esse carro nesa data');
                 
            
                  }

                  if(($agend_3_dias->dia1 == $value->dia2) or ($agend_3_dias->dial2 == $value->dia2) or ($agend_3_dias->dia3== $value->dia2) ){

                    return 'Já agendado';
                    
         
            
                  }

                  if(($agend_3_dias->dia1 == $value->dia3) or ($agend_3_dias->dial2 == $value->dia3) or ($agend_3_dias->dia3== $value->dia3) ){

                    return 'Já agendado';
                    
           
            
                  }
             } 
  
  
       
    }


    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'essa data já esta agendada';
    }
}
