<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Requests\StoreAgendamento_3_diasRequest;
use App\Models\Agendamento_3_dias;
use App\Models\Agendamento_15_dias;
use App\Models\Automovel;
use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\EnderecoEmpresa;
use App\Models\Contrato;
use App\Models\Feriado;
use App\Models\Qtd_dias;
use App\Models\User;
use Session;
use DB;



class Agendamento3DiasController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*
        $agendamento_3_dias = Empresa::join('agendamento_3_dias','agendamento_3_dias.id','=','agendamento_3_dias.empresa_id')->get();

        */
        $agendamento_3_dias = DB::table('empresas')
            ->join('agendamento_3_dias', 'empresas.id', '=', 'agendamento_3_dias.empresa_id')
            ->select('empresas.*', 'agendamento_3_dias.dia1', 'agendamento_3_dias.dia2', 'agendamento_3_dias.dia3')->get();


        /*

            $users = DB::table('users')
            ->join('contacts', 'users.id', '=', 'contacts.user_id')
            ->join('orders', 'users.id', '=', 'orders.user_id')
            ->select('users.*', 'contacts.phone', 'orders.price')
            ->get();

        */





        /*
        $empresa = Empresa::join('endereco_empresas','endereco_empresas.id','=','empresas.id')
        ->join('users', 'users.id','=','empresas.user_id')->where('users.id', auth()->user()->id)->select('empresas.*')->get();
        */
        return view('3_dias.index',compact('agendamento_3_dias'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function create()
    {
        //
        $agendamento_3_dias = Agendamento_3_dias::get();
        

         return view('3_dias.create',compact(['agendamento_3_dias']));
    }




     public function store(StoreAgendamento_3_diasRequest $request)
    {
     
        $agendamento_3_dias = new Agendamento_3_dias();
            $agendamento_3_dias->dia1=$request->dia1;
            $agendamento_3_dias->dia2=$request->dia2;
            $agendamento_3_dias->dia3=$request->dia3;
            $agendamento_3_dias->qtd_dias_id=$request->qtd_dias_id;
            $agendamento_3_dias->empresa_id=$request->empresa_id;
            $agendamento_3_dias->endereco_empresas_id=$request->endereco_empresas_id;
            $agendamento_3_dias->automovel_id=$request->automovel_id;

            $feriado=Feriado::get();
            $quinze_dias=Agendamento_15_dias::get();
            $automovel=Automovel::get();
         
             $agendamento_3_dias1= Agendamento_3_dias::join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')
                                    ->where('a.id',$request->automovel_id)->get();
            
            $qtd_r = 0;
             foreach($agendamento_3_dias1 as $agend_3_dias){


                 if(($agend_3_dias->dia1 == $request->dia1) or ($agend_3_dias->dial2 == $request->dia1) or ($agend_3_dias->dia3== $request->dia1) ){
                   
                    $qtd_r++;
                   
                  
            
                  }

                  if(($agend_3_dias->dia1 == $request->dia2) or ($agend_3_dias->dial2 == $request->dia2) or ($agend_3_dias->dia3== $request->dia2) ){

                    $qtd_r++;
                    
         
            
                  }

                  if(($agend_3_dias->dia1 == $request->dia3) or ($agend_3_dias->dial2 == $request->dia3) or ($agend_3_dias->dia3== $request->dia3) ){

                    $qtd_r++;
                    
           
            
                  }
             } 
            
             if ($qtd_r > 0) {
                 
                 return redirect()->route('Empresa')->with('alert-danger','carro ja agendado');
             }
           
             
            foreach($feriado as $feriad) 
            {
                if(($feriad->data == $request->dia1) or ($feriad->data == $request->dia2) or ($feriad->data == $request->dia3) )
                   
                  return "você escolheu uma data que e um dia de feriado por favor retorne e tente outra data";
            }

            foreach($quinze_dias as $quinze_dia) 
            {
                if(($quinze_dia->data == $request->dia1))
                     return "ja temos agendamento nessa data por favor retorne e tente outra data";

             }      
                 
        


            $agendamento_3_dias->save();

             $contrato = Agendamento_3_dias::join('empresas as e','e.id','=','agendamento_3_dias.empresa_id')
                ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
                ->join('endereco_empresas as ee','ee.id','=','agendamento_3_dias.empresa_id')
                ->join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')
                ->where('agendamento_3_dias.id',$agendamento_3_dias->id)
                ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_3_dias.*')->first();  


         $id = $agendamento_3_dias->id;

            
    
           
                return view('pdf.pdf', compact('id','contrato'))->with('success',' criador com successo.');

            

       

        

         



    }

  
    public function show(Agendamento_3_dias $agendamento_3_dias)
    {
        //
    }

   
    public function edit(Agendamento_3_dias $agendamento_3_dias)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendamento_3_diasRequest  $request
     * @param  \App\Models\Agendamento_3_dias  $agendamento_3_dias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgendamento_3_diasRequest $request, Agendamento_3_dias $agendamento_3_dias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento_3_dias  $agendamento_3_dias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento_3_dias $agendamento_3_dias)
    {
        //
    }
}
