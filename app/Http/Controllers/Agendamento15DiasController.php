<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAgendamento_15_diasRequest;
use App\Models\Agendamento_15_dias;
use App\Models\Agendamento_3_dias;
use App\Models\Contrato;
use App\Models\Feriado;
use App\Models\Automovel;
use DB;

class Agendamento15DiasController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agendamento_15_dias = Agendamento_15_dias::join('empresas as e','e.id','=','agendamento_15_dias.empresa_id')
                ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
                ->join('endereco_empresas as ee','ee.id','=','agendamento_15_dias.empresa_id')
                ->join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')
                ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_15_dias.*')->get();  



        return view('15_dias.index',compact('agendamento_15_dias'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agendamento_15_dias = Agendamento_15_dias::get();
        

         return view('15_dias.index',compact(['agendamento_15_dias']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgendamento_15_diasRequest  $request
     * @return \Illuminate\Http\Response
     */
  public function store(Request $request)
    {
        //
        $Agendamento_15_dias = new Agendamento_15_dias();
        $Agendamento_15_dias->dia1=$request->dia1;
        $Agendamento_15_dias->dia2=$request->dia2;
        $Agendamento_15_dias->dia3=$request->dia3;
        $Agendamento_15_dias->dia4=$request->dia4;
        $Agendamento_15_dias->dia5=$request->dia5;
        $Agendamento_15_dias->dia6=$request->dia6;
        $Agendamento_15_dias->dia7=$request->dia7;
        $Agendamento_15_dias->dia8=$request->dia8;
        $Agendamento_15_dias->dia9=$request->dia9;
        $Agendamento_15_dias->dia10=$request->dia10;
        $Agendamento_15_dias->dia11=$request->dia11;
        $Agendamento_15_dias->dia12=$request->dia12;
        $Agendamento_15_dias->dia13=$request->dia13;
        $Agendamento_15_dias->dia14=$request->dia14;
        $Agendamento_15_dias->dia15=$request->dia15;
        $Agendamento_15_dias->empresa_id=$request->empresa_id;
        $Agendamento_15_dias->automovel_id=$request->automovel_id;

       $quinze_dias=Agendamento_15_dias::join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
        $feriado=Feriado::get();
        $automovel=Automovel::get();
        

         $agendamento_3_dias1= Agendamento_3_dias::join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
           
         //validando com tabela 3 dias 
            
            
            $qtd_r = 0;
             foreach($quinze_dias as $quinze_d){


                 if(($quinze_d->dia1 == $request->dia1) or 
                    ($quinze_dias->dia2 == $request->dia1) or 
                    ($quinze_dias->dia3== $request->dia1) or 
                    ($quinze_dias->dia4 == $request->dia1) or 
                    ($quinze_dias->dia5== $request->dia1) or 
                    ($quinze_dias->dia6 == $request->dia1) or 
                    ($quinze_dias->dia7== $request->dia1) or
                    ($quinze_dias->dia8 == $request->dia1) or
                    ($quinze_dias->dia9== $request->dia1) or
                    ($quinze_dias->dia10 == $request->dia1) or
                    ($quinze_dias->dia11== $request->dia1) or
                    ($quinze_dias->dia12 == $request->dia1) or 
                    ($quinze_dias->dia13== $request->dia1) or 
                    ($quinze_dias->dia14 == $request->dia1) or
                    ($quinze_dias->dia15== $request->dia1) or
                    ($quinze_dias->dia15 == $request->dia1)){
                   
                    $qtd_r++;
                   
                  }

                  if(($quinze_d->dia1 == $request->dia2) or 
                    ($quinze_dias->dia2 == $request->dia2) or 
                    ($quinze_dias->dia3== $request->dia2) or 
                    ($quinze_dias->dia4 == $request->dia2) or 
                    ($quinze_dias->dia5== $request->dia2) or 
                    ($quinze_dias->dia6 == $request->dia2) or 
                    ($quinze_dias->dia7== $request->dia2) or
                    ($quinze_dias->dia8 == $request->dia2) or
                    ($quinze_dias->dia9== $request->dia2) or
                    ($quinze_dias->dia10 == $request->dia2) or
                    ($quinze_dias->dia11== $request->dia2) or
                    ($quinze_dias->dia12 == $request->dia2) or 
                    ($quinze_dias->dia13== $request->dia2) or 
                    ($quinze_dias->dia14 == $request->dia2) or
                    ($quinze_dias->dia15== $request->dia2) or
                    ($quinze_dias->dia15 == $request->dia2) ){

                    $qtd_r++;
                    
                  }

                  if(($quinze_d->dia1 == $request->dia3) or 
                    ($quinze_dias->dia2 == $request->dia3) or 
                    ($quinze_dias->dia3== $request->dia3) or 
                    ($quinze_dias->dia4 == $request->dia3) or 
                    ($quinze_dias->dia5== $request->dia3) or 
                    ($quinze_dias->dia6 == $request->dia3) or 
                    ($quinze_dias->dia7== $request->dia3) or
                    ($quinze_dias->dia8 == $request->dia3) or
                    ($quinze_dias->dia9== $request->dia3) or
                    ($quinze_dias->dia10 == $request->dia3) or
                    ($quinze_dias->dia11== $request->dia3) or
                    ($quinze_dias->dia12 == $request->dia3) or 
                    ($quinze_dias->dia13== $request->dia3) or 
                    ($quinze_dias->dia14 == $request->dia3) or
                    ($quinze_dias->dia15== $request->dia3) or
                    ($quinze_dias->dia15 == $request->dia3) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia4) or 
                    ($quinze_dias->dia2 == $request->dia4) or 
                    ($quinze_dias->dia3== $request->dia4) or 
                    ($quinze_dias->dia4 == $request->dia4) or 
                    ($quinze_dias->dia5== $request->dia4) or 
                    ($quinze_dias->dia6 == $request->dia4) or 
                    ($quinze_dias->dia7== $request->dia4) or
                    ($quinze_dias->dia8 == $request->dia4) or
                    ($quinze_dias->dia9== $request->dia4) or
                    ($quinze_dias->dia10 == $request->dia4) or
                    ($quinze_dias->dia11== $request->dia4) or
                    ($quinze_dias->dia12 == $request->dia4) or 
                    ($quinze_dias->dia13== $request->dia4) or 
                    ($quinze_dias->dia14 == $request->dia4) or
                    ($quinze_dias->dia15== $request->dia4) or
                    ($quinze_dias->dia15 == $request->dia4) ){

                    $qtd_r++;
                  }


                  if(($quinze_d->dia1 == $request->dia5) or 
                    ($quinze_dias->dia2 == $request->dia5) or 
                    ($quinze_dias->dia3== $request->dia5) or 
                    ($quinze_dias->dia4 == $request->dia5) or 
                    ($quinze_dias->dia5== $request->dia5) or 
                    ($quinze_dias->dia6 == $request->dia5) or 
                    ($quinze_dias->dia7== $request->dia5) or
                    ($quinze_dias->dia8 == $request->dia5) or
                    ($quinze_dias->dia9== $request->dia5) or
                    ($quinze_dias->dia10 == $request->dia5) or
                    ($quinze_dias->dia11== $request->dia5) or
                    ($quinze_dias->dia12 == $request->dia5) or 
                    ($quinze_dias->dia13== $request->dia5) or 
                    ($quinze_dias->dia14 == $request->dia5) or
                    ($quinze_dias->dia15== $request->dia5) or
                    ($quinze_dias->dia15 == $request->dia5) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia6) or 
                    ($quinze_dias->dia2 == $request->dia6) or 
                    ($quinze_dias->dia3== $request->dia6) or 
                    ($quinze_dias->dia4 == $request->dia6) or 
                    ($quinze_dias->dia5== $request->dia6) or 
                    ($quinze_dias->dia6 == $request->dia6) or 
                    ($quinze_dias->dia7== $request->dia6) or
                    ($quinze_dias->dia8 == $request->dia6) or
                    ($quinze_dias->dia9== $request->dia6) or
                    ($quinze_dias->dia10 == $request->dia6) or
                    ($quinze_dias->dia11== $request->dia6) or
                    ($quinze_dias->dia12 == $request->dia6) or 
                    ($quinze_dias->dia13== $request->dia6) or 
                    ($quinze_dias->dia14 == $request->dia6) or
                    ($quinze_dias->dia15== $request->dia6) or
                    ($quinze_dias->dia15 == $request->dia6) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia7) or 
                    ($quinze_dias->dia2 == $request->dia7) or 
                    ($quinze_dias->dia3== $request->dia7) or 
                    ($quinze_dias->dia4 == $request->dia7) or 
                    ($quinze_dias->dia5== $request->dia7) or 
                    ($quinze_dias->dia6 == $request->dia7) or 
                    ($quinze_dias->dia7== $request->dia7) or
                    ($quinze_dias->dia8 == $request->dia7) or
                    ($quinze_dias->dia9== $request->dia7) or
                    ($quinze_dias->dia10 == $request->dia7) or
                    ($quinze_dias->dia11== $request->dia7) or
                    ($quinze_dias->dia12 == $request->dia7) or 
                    ($quinze_dias->dia13== $request->dia7) or 
                    ($quinze_dias->dia14 == $request->dia7) or
                    ($quinze_dias->dia15== $request->dia7) or
                    ($quinze_dias->dia15 == $request->dia7) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia8) or 
                    ($quinze_dias->dia2 == $request->dia8) or 
                    ($quinze_dias->dia3== $request->dia8) or 
                    ($quinze_dias->dia4 == $request->dia8) or 
                    ($quinze_dias->dia5== $request->dia8) or 
                    ($quinze_dias->dia6 == $request->dia8) or 
                    ($quinze_dias->dia7== $request->dia8) or
                    ($quinze_dias->dia8 == $request->dia8) or
                    ($quinze_dias->dia9== $request->dia8) or
                    ($quinze_dias->dia10 == $request->dia8) or
                    ($quinze_dias->dia11== $request->dia8) or
                    ($quinze_dias->dia12 == $request->dia8) or 
                    ($quinze_dias->dia13== $request->dia8) or 
                    ($quinze_dias->dia14 == $request->dia8) or
                    ($quinze_dias->dia15== $request->dia8) or
                    ($quinze_dias->dia15 == $request->dia8) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia9) or 
                    ($quinze_dias->dia2 == $request->dia9) or 
                    ($quinze_dias->dia3== $request->dia9) or 
                    ($quinze_dias->dia4 == $request->dia9) or 
                    ($quinze_dias->dia5== $request->dia9) or 
                    ($quinze_dias->dia6 == $request->dia9) or 
                    ($quinze_dias->dia7== $request->dia9) or
                    ($quinze_dias->dia8 == $request->dia9) or
                    ($quinze_dias->dia9== $request->dia9) or
                    ($quinze_dias->dia10 == $request->dia9) or
                    ($quinze_dias->dia11== $request->dia9) or
                    ($quinze_dias->dia12 == $request->dia9) or 
                    ($quinze_dias->dia13== $request->dia9) or 
                    ($quinze_dias->dia14 == $request->dia9) or
                    ($quinze_dias->dia15== $request->dia9) or
                    ($quinze_dias->dia15 == $request->dia9) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia10) or 
                    ($quinze_dias->dia2 == $request->dia10) or 
                    ($quinze_dias->dia3== $request->dia10) or 
                    ($quinze_dias->dia4 == $request->dia10) or 
                    ($quinze_dias->dia5== $request->dia10) or 
                    ($quinze_dias->dia6 == $request->dia10) or 
                    ($quinze_dias->dia7== $request->dia10) or
                    ($quinze_dias->dia8 == $request->dia10) or
                    ($quinze_dias->dia9== $request->dia10) or
                    ($quinze_dias->dia10 == $request->dia10) or
                    ($quinze_dias->dia11== $request->dia10) or
                    ($quinze_dias->dia12 == $request->dia10) or 
                    ($quinze_dias->dia13== $request->dia10) or 
                    ($quinze_dias->dia14 == $request->dia10) or
                    ($quinze_dias->dia15== $request->dia10) or
                    ($quinze_dias->dia15 == $request->dia10) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia11) or 
                    ($quinze_dias->dia2 == $request->dia11) or 
                    ($quinze_dias->dia3== $request->dia11) or 
                    ($quinze_dias->dia4 == $request->dia11) or 
                    ($quinze_dias->dia5== $request->dia11) or 
                    ($quinze_dias->dia6 == $request->dia11) or 
                    ($quinze_dias->dia7== $request->dia11) or
                    ($quinze_dias->dia8 == $request->dia11) or
                    ($quinze_dias->dia9== $request->dia11) or
                    ($quinze_dias->dia10 == $request->dia11) or
                    ($quinze_dias->dia11== $request->dia11) or
                    ($quinze_dias->dia12 == $request->dia11) or 
                    ($quinze_dias->dia13== $request->dia11) or 
                    ($quinze_dias->dia14 == $request->dia11) or
                    ($quinze_dias->dia15== $request->dia11) or
                    ($quinze_dias->dia15 == $request->dia11) ){

                    $qtd_r++;
                  }

                    if(($quinze_d->dia1 == $request->dia12) or 
                        ($quinze_dias->dia2 == $request->dia12) or 
                        ($quinze_dias->dia3== $request->dia12) or 
                        ($quinze_dias->dia4 == $request->dia12) or 
                        ($quinze_dias->dia5== $request->dia12) or 
                        ($quinze_dias->dia6 == $request->dia12) or 
                        ($quinze_dias->dia7== $request->dia12) or
                        ($quinze_dias->dia8 == $request->dia12) or
                        ($quinze_dias->dia9== $request->dia12) or
                        ($quinze_dias->dia10 == $request->dia12) or
                        ($quinze_dias->dia11== $request->dia12) or
                        ($quinze_dias->dia12 == $request->dia12) or 
                        ($quinze_dias->dia13== $request->dia12) or 
                        ($quinze_dias->dia14 == $request->dia12) or
                        ($quinze_dias->dia15== $request->dia12) or
                        ($quinze_dias->dia15 == $request->dia12) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia13) or 
                        ($quinze_dias->dia2 == $request->dia13) or 
                        ($quinze_dias->dia3== $request->dia13) or 
                        ($quinze_dias->dia4 == $request->dia13) or 
                        ($quinze_dias->dia5== $request->dia13) or 
                        ($quinze_dias->dia6 == $request->dia13) or 
                        ($quinze_dias->dia7== $request->dia13) or
                        ($quinze_dias->dia8 == $request->dia13) or
                        ($quinze_dias->dia9== $request->dia13) or
                        ($quinze_dias->dia10 == $request->dia13) or
                        ($quinze_dias->dia11== $request->dia13) or
                        ($quinze_dias->dia12 == $request->dia13) or 
                        ($quinze_dias->dia13== $request->dia13) or 
                        ($quinze_dias->dia14 == $request->dia13) or
                        ($quinze_dias->dia15== $request->dia13) or
                        ($quinze_dias->dia15 == $request->dia13) ){

                    $qtd_r++;
                  }


                   if(($quinze_d->dia1 == $request->dia14) or 
                        ($quinze_dias->dia2 == $request->dia14) or 
                        ($quinze_dias->dia3== $request->dia14) or 
                        ($quinze_dias->dia4 == $request->dia14) or 
                        ($quinze_dias->dia5== $request->dia14) or 
                        ($quinze_dias->dia6 == $request->dia14) or 
                        ($quinze_dias->dia7== $request->dia14) or
                        ($quinze_dias->dia8 == $request->dia14) or
                        ($quinze_dias->dia9== $request->dia14) or
                        ($quinze_dias->dia10 == $request->dia14) or
                        ($quinze_dias->dia11== $request->dia14) or
                        ($quinze_dias->dia12 == $request->dia14) or 
                        ($quinze_dias->dia13== $request->dia14) or 
                        ($quinze_dias->dia14 == $request->dia14) or
                        ($quinze_dias->dia15== $request->dia14) or
                        ($quinze_dias->dia15 == $request->dia14) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia15) or 
                        ($quinze_dias->dia2 == $request->dia15) or 
                        ($quinze_dias->dia3== $request->dia15) or 
                        ($quinze_dias->dia4 == $request->dia15) or 
                        ($quinze_dias->dia5== $request->dia15) or 
                        ($quinze_dias->dia6 == $request->dia15) or 
                        ($quinze_dias->dia7== $request->dia15) or
                        ($quinze_dias->dia8 == $request->dia15) or
                        ($quinze_dias->dia9== $request->dia15) or
                        ($quinze_dias->dia10 == $request->dia15) or
                        ($quinze_dias->dia11== $request->dia15) or
                        ($quinze_dias->dia12 == $request->dia15) or 
                        ($quinze_dias->dia13== $request->dia15) or 
                        ($quinze_dias->dia14 == $request->dia15) or
                        ($quinze_dias->dia15== $request->dia15) or
                        ($quinze_dias->dia15 == $request->dia15) ){

                    $qtd_r++;
                  }
             } 
            
            
           
             // validando com a tabela feriado 
            foreach($feriado as $feriad) 
            {
                if(($feriad->dia1 == $request->dia1) or 
                    ($feriad->data == $request->dia2) or 
                    ($feriad->data == $request->dia3) or 
                    ($feriad->data == $request->dia4) or 
                    ($feriad->data == $request->dia5) or 
                    ($feriad->data == $request->dia6) or 
                    ($feriad->data == $request->dia6) or 
                    ($feriad->data == $request->dia7) or 
                    ($feriad->data == $request->dia8) or 
                    ($feriad->data == $request->dia9) or 
                    ($feriad->data == $request->dia10) or 
                    ($feriad->data == $request->dia11) or 
                    ($feriad->data == $request->dia12) or 
                    ($feriad->data == $request->dia13) or 
                    ($feriad->data == $request->dia14) or 
                    ($feriad->data == $request->dia15)){

                    return "você escolheu uma data que e um dia de feriado por favor retorne e tente outra data";

                }
                   
                  
            }
           

            //validando de 15 dias com 3 dias  

            foreach($$agendamento_3_dias1 as $agend_3_dias) 
            {

            if(($request->dia1 ==$agend_3_dias->dia1) or 
                ($request->dia1==$agend_3_dias->dia2) or 
                ($request->dia1==$agend_3_dias->dia3) or

                ($request->dia2==$agend_3_dias->dia1) or 
                ($request->dia2==$agend_3_dias->dia2) or 
                ($request->dia2==$agend_3_dias->dia3) or

                ($request->dia3==$agend_3_dias->dia1) or 
                ($request->dia3==$agend_3_dias->dia2) or 
                ($request->dia3==$agend_3_dias->dia3) or

                ($request->dia4==$agend_3_dias->dia1) or 
                ($request->dia4==$agend_3_dias->dia2) or 
                ($request->dia4==$agend_3_dias->dia3) or

                ($request->dia5==$agend_3_dias->dia1) or 
                ($request->dia5==$agend_3_dias->dia2) or 
                ($request->dia5==$agend_3_dias->dia3)

                ($request->dia6==$agend_3_dias->dia1) or 
                ($request->dia6==$agend_3_dias->dia2) or 
                ($request->dia6==$agend_3_dias->dia3)                

                ($request->dia7==$agend_3_dias->dia1) or 
                ($request->dia7==$agend_3_dias->dia2) or 
                ($request->dia7==$agend_3_dias->dia3) or

                ($request->dia8==$agend_3_dias->dia1) or 
                ($request->dia8==$agend_3_dias->dia2) or 
                ($request->dia8==$agend_3_dias->dia3) or

                ($request->dia9==$agend_3_dias->dia1) or 
                ($request->dia9==$agend_3_dias->dia2) or 
                ($request->dia9==$agend_3_dias->dia3) or

                ($request->dia10==$agend_3_dias->dia1) or 
                ($request->dia10==$agend_3_dias->dia2) or 
                ($request->dia10==$agend_3_dias->dia3) or

                ($request->dia11==$agend_3_dias->dia1) or 
                ($request->dia11==$agend_3_dias->dia2) or 
                ($request->dia11==$agend_3_dias->dia3) or

                ($request->dia12==$agend_3_dias->dia1) or 
                ($request->dia12==$agend_3_dias->dia2) or 
                ($request->dia12==$agend_3_dias->dia3) or

                ($request->dia13==$agend_3_dias->dia1) or 
                ($request->dia13==$agend_3_dias->dia2) or 
                ($request->dia13==$agend_3_dias->dia3) or

                ($request->dia14==$agend_3_dias->dia1) or 
                ($request->dia14==$agend_3_dias->dia2) or 
                ($request->dia14==$agend_3_dias->dia3) or

                ($request->dia15==$agend_3_dias->dia1) or 
                ($request->dia15==$agend_3_dias->dia2) or 
                ($request->dia15==$agend_3_dias->dia3)){

                    $qtd_r++;

                }                
           
            }

             if ($qtd_r > 0) {
                 
                 return redirect()->route('Empresa')->with('alert-danger','as datas que você escolheu ja esta agendada no sistema para esse carro retorne e tente novamente com outro carro');
             }  




        $Agendamento_15_dias->save();

 

        $contrato = Agendamento_15_dias::join('empresas as e','e.id','=','agendamento_15_dias.empresa_id')
        ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
        ->join('endereco_empresas as ee','ee.id','=','agendamento_15_dias.empresa_id')
        ->join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')
        ->where('agendamento_15_dias.id',$Agendamento_15_dias->id)
        ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_15_dias.*')->first();              
         $id = $Agendamento_15_dias->id;


        return view('pdf_15_dias.pdf', ['id' => $id,'contrato' => $contrato])->with('success',"criador com successo.");

  }
    
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento_15_dias  $agendamento_15_dias
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $Agendamento_15_dia = Agendamento_15_dias::findorFail($id);
        $automovel =Automovel::get();
        return view('15_dias.edit',['Agendamento_15_dia'=>$Agendamento_15_dia],['automovel'=>$automovel]);
    }

   
   
    public function update($id, Request $request)
    {
         $agendamento_15_dias = Agendamento_15_dias::find($id);
         $agendamento_15_dias->dia1 = $request->dia1;
         $agendamento_15_dias->dia2 = $request->dia2;
         $agendamento_15_dias->dia3 = $request->dia3;
         $agendamento_15_dias->dia4 = $request->dia4;
         $agendamento_15_dias->dia5 = $request->dia5;
         $agendamento_15_dias->dia6 = $request->dia6;
         $agendamento_15_dias->dia7 = $request->dia7;
         $agendamento_15_dias->dia8 = $request->dia8;
         $agendamento_15_dias->dia9 = $request->dia9;
         $agendamento_15_dias->dia10 = $request->dia10;
         $agendamento_15_dias->dia11 = $request->dia11;
         $agendamento_15_dias->dia12 = $request->dia12;
         $agendamento_15_dias->dia13 = $request->dia13;
         $agendamento_15_dias->dia14 = $request->dia14;
         $agendamento_15_dias->dia15 = $request->dia15;
       
        $quinze_dias=Agendamento_15_dias::join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')
        ->where('a.id',$request->automovel_id)->get();
        $feriado=Feriado::get();
        $automovel=Automovel::get();
        
         $agendamento_3_dias1= Agendamento_3_dias::join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')
         ->where('a.id',$request->automovel_id)->get();

         $qtd_r = 0;
             foreach($quinze_dias as $quinze_d)
             {


                 if(($quinze_d->dia1 == $request->dia1) or 
                    ($quinze_d->dia2 == $request->dia1) or 
                    ($quinze_d->dia3== $request->dia1) or 
                    ($quinze_d->dia4 == $request->dia1) or 
                    ($quinze_d->dia5== $request->dia1) or 
                    ($quinze_d->dia6 == $request->dia1) or 
                    ($quinze_d->dia7== $request->dia1) or
                    ($quinze_d->dia8 == $request->dia1) or
                    ($quinze_d->dia9== $request->dia1) or
                    ($quinze_d->dia10 == $request->dia1) or
                    ($quinze_d->dia11== $request->dia1) or
                    ($quinze_d->dia12 == $request->dia1) or 
                    ($quinze_d->dia13== $request->dia1) or 
                    ($quinze_d->dia14 == $request->dia1) or
                    ($quinze_d->dia15== $request->dia1) or
                    ($quinze_d->dia15 == $request->dia1)){
                   
                    $qtd_r++;
                   
                  }

                  if(($quinze_d->dia1 == $request->dia2) or 
                    ($quinze_d->dia2 == $request->dia2) or 
                    ($quinze_d->dia3== $request->dia2) or 
                    ($quinze_d->dia4 == $request->dia2) or 
                    ($quinze_d->dia5== $request->dia2) or 
                    ($quinze_d->dia6 == $request->dia2) or 
                    ($quinze_d->dia7== $request->dia2) or
                    ($quinze_d->dia8 == $request->dia2) or
                    ($quinze_d->dia9== $request->dia2) or
                    ($quinze_d->dia10 == $request->dia2) or
                    ($quinze_d->dia11== $request->dia2) or
                    ($quinze_d->dia12 == $request->dia2) or 
                    ($quinze_d->dia13== $request->dia2) or 
                    ($quinze_d->dia14 == $request->dia2) or
                    ($quinze_d->dia15== $request->dia2) or
                    ($quinze_d->dia15 == $request->dia2) ){

                    $qtd_r++;
                    
                  }

                  if(($quinze_d->dia1 == $request->dia3) or 
                    ($quinze_d->dia2 == $request->dia3) or 
                    ($quinze_d->dia3== $request->dia3) or 
                    ($quinze_d->dia4 == $request->dia3) or 
                    ($quinze_d->dia5== $request->dia3) or 
                    ($quinze_d->dia6 == $request->dia3) or 
                    ($quinze_d->dia7== $request->dia3) or
                    ($quinze_d->dia8 == $request->dia3) or
                    ($quinze_d->dia9== $request->dia3) or
                    ($quinze_d->dia10 == $request->dia3) or
                    ($quinze_d->dia11== $request->dia3) or
                    ($quinze_d->dia12 == $request->dia3) or 
                    ($quinze_d->dia13== $request->dia3) or 
                    ($quinze_d->dia14 == $request->dia3) or
                    ($quinze_d->dia15== $request->dia3) or
                    ($quinze_d->dia15 == $request->dia3) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia4) or 
                    ($quinze_d->dia2 == $request->dia4) or 
                    ($quinze_d->dia3== $request->dia4) or 
                    ($quinze_d->dia4 == $request->dia4) or 
                    ($quinze_d->dia5== $request->dia4) or 
                    ($quinze_d->dia6 == $request->dia4) or 
                    ($quinze_d->dia7== $request->dia4) or
                    ($quinze_d->dia8 == $request->dia4) or
                    ($quinze_d->dia9== $request->dia4) or
                    ($quinze_d->dia10 == $request->dia4) or
                    ($quinze_d->dia11== $request->dia4) or
                    ($quinze_d->dia12 == $request->dia4) or 
                    ($quinze_d->dia13== $request->dia4) or 
                    ($quinze_d->dia14 == $request->dia4) or
                    ($quinze_d->dia15== $request->dia4) or
                    ($quinze_d->dia15 == $request->dia4) ){

                    $qtd_r++;
                  }


                  if(($quinze_d->dia1 == $request->dia5) or 
                    ($quinze_d->dia2 == $request->dia5) or 
                    ($quinze_d->dia3== $request->dia5) or 
                    ($quinze_d->dia4 == $request->dia5) or 
                    ($quinze_d->dia5== $request->dia5) or 
                    ($quinze_d->dia6 == $request->dia5) or 
                    ($quinze_d->dia7== $request->dia5) or
                    ($quinze_d->dia8 == $request->dia5) or
                    ($quinze_d->dia9== $request->dia5) or
                    ($quinze_d->dia10 == $request->dia5) or
                    ($quinze_d->dia11== $request->dia5) or
                    ($quinze_d->dia12 == $request->dia5) or 
                    ($quinze_d->dia13== $request->dia5) or 
                    ($quinze_d->dia14 == $request->dia5) or
                    ($quinze_d->dia15== $request->dia5) or
                    ($quinze_d->dia15 == $request->dia5) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia6) or 
                    ($quinze_d->dia2 == $request->dia6) or 
                    ($quinze_d->dia3== $request->dia6) or 
                    ($quinze_d->dia4 == $request->dia6) or 
                    ($quinze_d->dia5== $request->dia6) or 
                    ($quinze_d->dia6 == $request->dia6) or 
                    ($quinze_d->dia7== $request->dia6) or
                    ($quinze_d->dia8 == $request->dia6) or
                    ($quinze_d->dia9== $request->dia6) or
                    ($quinze_d->dia10 == $request->dia6) or
                    ($quinze_d->dia11== $request->dia6) or
                    ($quinze_d->dia12 == $request->dia6) or 
                    ($quinze_d->dia13== $request->dia6) or 
                    ($quinze_d->dia14 == $request->dia6) or
                    ($quinze_d->dia15== $request->dia6) or
                    ($quinze_d->dia15 == $request->dia6) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia7) or 
                    ($quinze_d->dia2 == $request->dia7) or 
                    ($quinze_d->dia3== $request->dia7) or 
                    ($quinze_d->dia4 == $request->dia7) or 
                    ($quinze_d->dia5== $request->dia7) or 
                    ($quinze_d->dia6 == $request->dia7) or 
                    ($quinze_d->dia7== $request->dia7) or
                    ($quinze_d->dia8 == $request->dia7) or
                    ($quinze_d->dia9== $request->dia7) or
                    ($quinze_d->dia10 == $request->dia7) or
                    ($quinze_d->dia11== $request->dia7) or
                    ($quinze_d->dia12 == $request->dia7) or 
                    ($quinze_d->dia13== $request->dia7) or 
                    ($quinze_d->dia14 == $request->dia7) or
                    ($quinze_d->dia15== $request->dia7) or
                    ($quinze_d->dia15 == $request->dia7) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia8) or 
                    ($quinze_d->dia2 == $request->dia8) or 
                    ($quinze_d->dia3== $request->dia8) or 
                    ($quinze_d->dia4 == $request->dia8) or 
                    ($quinze_d->dia5== $request->dia8) or 
                    ($quinze_d->dia6 == $request->dia8) or 
                    ($quinze_d->dia7== $request->dia8) or
                    ($quinze_d->dia8 == $request->dia8) or
                    ($quinze_d->dia9== $request->dia8) or
                    ($quinze_d->dia10 == $request->dia8) or
                    ($quinze_d->dia11== $request->dia8) or
                    ($quinze_d->dia12 == $request->dia8) or 
                    ($quinze_d->dia13== $request->dia8) or 
                    ($quinze_d->dia14 == $request->dia8) or
                    ($quinze_d->dia15== $request->dia8) or
                    ($quinze_d->dia15 == $request->dia8) ){

                    $qtd_r++;
                  }

                  if(($quinze_d->dia1 == $request->dia9) or 
                    ($quinze_d->dia2 == $request->dia9) or 
                    ($quinze_d->dia3== $request->dia9) or 
                    ($quinze_d->dia4 == $request->dia9) or 
                    ($quinze_d->dia5== $request->dia9) or 
                    ($quinze_d->dia6 == $request->dia9) or 
                    ($quinze_d->dia7== $request->dia9) or
                    ($quinze_d->dia8 == $request->dia9) or
                    ($quinze_d->dia9== $request->dia9) or
                    ($quinze_d->dia10 == $request->dia9) or
                    ($quinze_d->dia11== $request->dia9) or
                    ($quinze_d->dia12 == $request->dia9) or 
                    ($quinze_d->dia13== $request->dia9) or 
                    ($quinze_d->dia14 == $request->dia9) or
                    ($quinze_d->dia15== $request->dia9) or
                    ($quinze_d->dia15 == $request->dia9) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia10) or 
                    ($quinze_d->dia2 == $request->dia10) or 
                    ($quinze_d->dia3== $request->dia10) or 
                    ($quinze_d->dia4 == $request->dia10) or 
                    ($quinze_d->dia5== $request->dia10) or 
                    ($quinze_d->dia6 == $request->dia10) or 
                    ($quinze_d->dia7== $request->dia10) or
                    ($quinze_d->dia8 == $request->dia10) or
                    ($quinze_d->dia9== $request->dia10) or
                    ($quinze_d->dia10 == $request->dia10) or
                    ($quinze_d->dia11== $request->dia10) or
                    ($quinze_d->dia12 == $request->dia10) or 
                    ($quinze_d->dia13== $request->dia10) or 
                    ($quinze_d->dia14 == $request->dia10) or
                    ($quinze_d->dia15== $request->dia10) or
                    ($quinze_d->dia15 == $request->dia10) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia11) or 
                    ($quinze_d->dia2 == $request->dia11) or 
                    ($quinze_d->dia3== $request->dia11) or 
                    ($quinze_d->dia4 == $request->dia11) or 
                    ($quinze_d->dia5== $request->dia11) or 
                    ($quinze_d->dia6 == $request->dia11) or 
                    ($quinze_d->dia7== $request->dia11) or
                    ($quinze_d->dia8 == $request->dia11) or
                    ($quinze_d->dia9== $request->dia11) or
                    ($quinze_d->dia10 == $request->dia11) or
                    ($quinze_d->dia11== $request->dia11) or
                    ($quinze_d->dia12 == $request->dia11) or 
                    ($quinze_d->dia13== $request->dia11) or 
                    ($quinze_d->dia14 == $request->dia11) or
                    ($quinze_d->dia15== $request->dia11) or
                    ($quinze_d->dia15 == $request->dia11) ){

                    $qtd_r++;
                  }

                    if(($quinze_d->dia1 == $request->dia12) or 
                        ($quinze_d->dia2 == $request->dia12) or 
                        ($quinze_d->dia3== $request->dia12) or 
                        ($quinze_d->dia4 == $request->dia12) or 
                        ($quinze_d->dia5== $request->dia12) or 
                        ($quinze_d->dia6 == $request->dia12) or 
                        ($quinze_d->dia7== $request->dia12) or
                        ($quinze_d->dia8 == $request->dia12) or
                        ($quinze_d->dia9== $request->dia12) or
                        ($quinze_d->dia10 == $request->dia12) or
                        ($quinze_d->dia11== $request->dia12) or
                        ($quinze_d->dia12 == $request->dia12) or 
                        ($quinze_d->dia13== $request->dia12) or 
                        ($quinze_d->dia14 == $request->dia12) or
                        ($quinze_d->dia15== $request->dia12) or
                        ($quinze_d->dia15 == $request->dia12) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia13) or 
                        ($quinze_d->dia2 == $request->dia13) or 
                        ($quinze_d->dia3== $request->dia13) or 
                        ($quinze_d->dia4 == $request->dia13) or 
                        ($quinze_d->dia5== $request->dia13) or 
                        ($quinze_d->dia6 == $request->dia13) or 
                        ($quinze_d->dia7== $request->dia13) or
                        ($quinze_d->dia8 == $request->dia13) or
                        ($quinze_d->dia9== $request->dia13) or
                        ($quinze_d->dia10 == $request->dia13) or
                        ($quinze_d->dia11== $request->dia13) or
                        ($quinze_d->dia12 == $request->dia13) or 
                        ($quinze_d->dia13== $request->dia13) or 
                        ($quinze_d->dia14 == $request->dia13) or
                        ($quinze_d->dia15== $request->dia13) or
                        ($quinze_d->dia15 == $request->dia13) ){

                    $qtd_r++;
                  }


                   if(($quinze_d->dia1 == $request->dia14) or 
                        ($quinze_d->dia2 == $request->dia14) or 
                        ($quinze_d->dia3== $request->dia14) or 
                        ($quinze_d->dia4 == $request->dia14) or 
                        ($quinze_d->dia5== $request->dia14) or 
                        ($quinze_d->dia6 == $request->dia14) or 
                        ($quinze_d->dia7== $request->dia14) or
                        ($quinze_d->dia8 == $request->dia14) or
                        ($quinze_d->dia9== $request->dia14) or
                        ($quinze_d->dia10 == $request->dia14) or
                        ($quinze_d->dia11== $request->dia14) or
                        ($quinze_d->dia12 == $request->dia14) or 
                        ($quinze_d->dia13== $request->dia14) or 
                        ($quinze_d->dia14 == $request->dia14) or
                        ($quinze_d->dia15== $request->dia14) or
                        ($quinze_d->dia15 == $request->dia14) ){

                    $qtd_r++;
                  }

                   if(($quinze_d->dia1 == $request->dia15) or 
                        ($quinze_d->dia2 == $request->dia15) or 
                        ($quinze_d->dia3== $request->dia15) or 
                        ($quinze_d->dia4 == $request->dia15) or 
                        ($quinze_d->dia5== $request->dia15) or 
                        ($quinze_d->dia6 == $request->dia15) or 
                        ($quinze_d->dia7== $request->dia15) or
                        ($quinze_d->dia8 == $request->dia15) or
                        ($quinze_d->dia9== $request->dia15) or
                        ($quinze_d->dia10 == $request->dia15) or
                        ($quinze_d->dia11== $request->dia15) or
                        ($quinze_d->dia12 == $request->dia15) or 
                        ($quinze_d->dia13== $request->dia15) or 
                        ($quinze_d->dia14 == $request->dia15) or
                        ($quinze_d->dia15== $request->dia15) or
                        ($quinze_d->dia15 == $request->dia15) ){

                    $qtd_r++;
                  }


             } //final do laço 15 dias 

             // validando com a tabela feriado 
            foreach($feriado as $feriad) 
            {
                if(($feriad->data == $request->dia1) or 
                    ($feriad->data == $request->dia2) or 
                    ($feriad->data == $request->dia3) or 
                    ($feriad->data == $request->dia4) or 
                    ($feriad->data == $request->dia5) or 
                    ($feriad->data == $request->dia6) or 
                    ($feriad->data == $request->dia6) or 
                    ($feriad->data == $request->dia7) or 
                    ($feriad->data == $request->dia8) or 
                    ($feriad->data == $request->dia9) or 
                    ($feriad->data == $request->dia10) or 
                    ($feriad->data == $request->dia11) or 
                    ($feriad->data == $request->dia12) or 
                    ($feriad->data == $request->dia13) or 
                    ($feriad->data == $request->dia14) or 
                    ($feriad->data == $request->dia15))
                    {

                    return redirect()->back()->withErrors(['msg' => 'o dia que você escolheu não e dia util ou e feriado']);

                    }
            }//final do laço feriado

            foreach($agendamento_3_dias1 as $agend_3_dias) 
            {

            if(($request->dia1 ==$agend_3_dias->dia1) or 
                ($request->dia1==$agend_3_dias->dia2) or 
                ($request->dia1==$agend_3_dias->dia3) or

                ($request->dia2==$agend_3_dias->dia1) or 
                ($request->dia2==$agend_3_dias->dia2) or 
                ($request->dia2==$agend_3_dias->dia3) or

                ($request->dia3==$agend_3_dias->dia1) or 
                ($request->dia3==$agend_3_dias->dia2) or 
                ($request->dia3==$agend_3_dias->dia3) or

                ($request->dia4==$agend_3_dias->dia1) or 
                ($request->dia4==$agend_3_dias->dia2) or 
                ($request->dia4==$agend_3_dias->dia3) or

                ($request->dia5==$agend_3_dias->dia1) or 
                ($request->dia5==$agend_3_dias->dia2) or 
                ($request->dia5==$agend_3_dias->dia3) or

                ($request->dia6==$agend_3_dias->dia1) or 
                ($request->dia6==$agend_3_dias->dia2) or 
                ($request->dia6==$agend_3_dias->dia3) or               

                ($request->dia7==$agend_3_dias->dia1) or 
                ($request->dia7==$agend_3_dias->dia2) or 
                ($request->dia7==$agend_3_dias->dia3) or

                ($request->dia8==$agend_3_dias->dia1) or 
                ($request->dia8==$agend_3_dias->dia2) or 
                ($request->dia8==$agend_3_dias->dia3) or

                ($request->dia9==$agend_3_dias->dia1) or 
                ($request->dia9==$agend_3_dias->dia2) or 
                ($request->dia9==$agend_3_dias->dia3) or

                ($request->dia10==$agend_3_dias->dia1) or 
                ($request->dia10==$agend_3_dias->dia2) or 
                ($request->dia10==$agend_3_dias->dia3) or

                ($request->dia11==$agend_3_dias->dia1) or 
                ($request->dia11==$agend_3_dias->dia2) or 
                ($request->dia11==$agend_3_dias->dia3) or

                ($request->dia12==$agend_3_dias->dia1) or 
                ($request->dia12==$agend_3_dias->dia2) or 
                ($request->dia12==$agend_3_dias->dia3) or

                ($request->dia13==$agend_3_dias->dia1) or 
                ($request->dia13==$agend_3_dias->dia2) or 
                ($request->dia13==$agend_3_dias->dia3) or

                ($request->dia14==$agend_3_dias->dia1) or 
                ($request->dia14==$agend_3_dias->dia2) or 
                ($request->dia14==$agend_3_dias->dia3) or

                ($request->dia15==$agend_3_dias->dia1) or 
                ($request->dia15==$agend_3_dias->dia2) or 
                ($request->dia15==$agend_3_dias->dia3)){

                    $qtd_r++;

                }                
           
            }// final do laço agendamento_3_dias1

            if ($qtd_r > 0) {
                 return redirect()->back()->withErrors(['msg' => 'este carro ja foi agendado nestas datas']);
                 /*
                  return Redirect::back()->withErrors(['msg' => 'The Message']);*/
                 /*
                 return redirect()->route('Empresa')->with('alert-danger','as datas que você escolheu ja esta agendada no sistema para esse carro retorne e tente novamente com outro carro');*/
             }  
                   
           $agendamento_15_dias = Agendamento_15_dias::join('empresas as e','e.id','=','agendamento_15_dias.empresa_id')
                ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
                ->join('endereco_empresas as ee','ee.id','=','agendamento_15_dias.empresa_id')
                ->join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')
                ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_15_dias.*')->get();  



        return view('15_dias.index',compact('agendamento_15_dias'));

         
    }// final do metodo update 

    
   
    public function destroy($id)
    {
        $agendamento_15_dias=agendamento_15_dias::findOrFail($id);
        $agendamento_15_dias->delete();


        return view('15_dias.index');
    }
}

