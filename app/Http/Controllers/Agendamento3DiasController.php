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
        $agendamento_3_dias = Agendamento_3_dias::join('empresas as e','e.id','=','agendamento_3_dias.empresa_id')
                ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
                ->join('endereco_empresas as ee','ee.id','=','agendamento_3_dias.empresa_id')
                ->join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')
                ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_3_dias.*')->get();  
    

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



    public function store(Request $request)
    {
     
        $agendamento_3_dias = new Agendamento_3_dias();
            $agendamento_3_dias->dia1=$request->dia1;
            $agendamento_3_dias->dia2=$request->dia2;
            $agendamento_3_dias->dia3=$request->dia3;
            $agendamento_3_dias->qtd_dias_id=$request->qtd_dias_id;
            $agendamento_3_dias->empresa_id=$request->empresa_id;
            $agendamento_3_dias->endereco_empresas_id=$request->endereco_empresas_id;
            $agendamento_3_dias->automovel_id=$request->automovel_id;

            if (($request->dia1==null) or ($request->dia2==null) or ($request->dia3==null)) {

                $automovel=Automovel::get();
                $empresa = Empresa::where('id',$request->empresa_id)->first();
                $enderecoempresa = EnderecoEmpresa::where('empresa_id', $empresa->id)->first();
                 return view('3_dias.create',compact('automovel','empresa','enderecoempresa'))->withErrors(['msg' => 'por favor preencher todos os campos']);
            }
            $feriado=Feriado::get();
            $automovel=Automovel::get();
            $quinze_dias=Agendamento_15_dias::join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
           
         //validando com tabela 3 dias 
             $agendamento_3_dias1= Agendamento_3_dias::join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
            
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
            
            
           
             // validando com a tabela feriado 
            foreach($feriado as $feriad) 
            {
                if(($feriad->dia1 == $request->dia1) or ($feriad->data == $request->dia2) or ($feriad->data == $request->dia3) ){

                     $automovel=Automovel::get();
                $empresa = Empresa::where('id',$request->empresa_id)->first();
                $enderecoempresa = EnderecoEmpresa::where('empresa_id', $empresa->id)->first();
                 return view('3_dias.create',compact('automovel','empresa','enderecoempresa'))->withErrors(['msg' => 'você agendou uma data que um feriado ou não e um dia util por favor retorne tente novamente']);


                }

                
                   
                
            }
           

            //validando com 15 dias 

            foreach($quinze_dias as $quinze_d) 
            {

            if(($request->dia1 ==$quinze_d->dia1 ) or 
                ($request->dia1==$quinze_d->dia2  ) or 
                ($request->dia1==$quinze_d->dia3) or 
                ($request->dia1==$quinze_d->dia4) or 
                ($request->dia1==$quinze_d->dia5) or 
                ($request->dia1==$quinze_d->dia6) or 
                ($request->dia1==$quinze_d->dia6) or 
                ($request->dia1==$quinze_d->dia7) or 
                ($request->dia1==$quinze_d->dia8) or 
                ($request->dia1==$quinze_d->dia9) or 
                ($request->dia1==$quinze_d->dia10) or 
                ($request->dia1==$quinze_d->dia11) or 
                ($request->dia1==$quinze_d->dia12) or 
                ($request->dia1==$quinze_d->dia13) or 
                ($request->dia1==$quinze_d->dia14) or 
                ($request->dia1==$quinze_d->dia15)) {


                    $qtd_r++;

                }                
           

            if(($request->dia2 ==$quinze_d->dia1 ) or 
                ($request->dia2==$quinze_d->dia2  ) or 
                ($request->dia2==$quinze_d->dia3) or 
                ($request->dia2==$quinze_d->dia4) or 
                ($request->dia2==$quinze_d->dia5) or 
                ($request->dia2==$quinze_d->dia6) or 
                ($request->dia2==$quinze_d->dia6) or 
                ($request->dia2==$quinze_d->dia7) or 
                ($request->dia2==$quinze_d->dia8) or 
                ($request->dia2==$quinze_d->dia9) or 
                ($request->dia2==$quinze_d->dia10) or 
                ($request->dia2==$quinze_d->dia11) or 
                ($request->dia2==$quinze_d->dia12) or 
                ($request->dia2==$quinze_d->dia13) or 
                ($request->dia2==$quinze_d->dia14) or 
                ($request->dia2==$quinze_d->dia15)) {

                            $qtd_r++;

                }               
            
        
             if(($request->dia3 ==$quinze_d->dia1) or 
                ($request->dia3==$quinze_d->dia2) or 
                ($request->dia3==$quinze_d->dia3) or 
                ($request->dia3==$quinze_d->dia4) or 
                ($request->dia3==$quinze_d->dia5) or 
                ($request->dia3==$quinze_d->dia6) or 
                ($request->dia3==$quinze_d->dia6) or 
                ($request->dia3==$quinze_d->dia7) or 
                ($request->dia3==$quinze_d->dia8) or 
                ($request->dia3==$quinze_d->dia9) or 
                ($request->dia3==$quinze_d->dia10) or 
                ($request->dia3==$quinze_d->dia11) or 
                ($request->dia3==$quinze_d->dia12) or 
                ($request->dia3==$quinze_d->dia13) or 
                ($request->dia3==$quinze_d->dia14) or 
                ($request->dia3==$quinze_d->dia15)) {

                            $qtd_r++;

                }                
            }

             if ($qtd_r > 0) {

                $automovel=Automovel::get();
                $empresa = Empresa::where('id',$request->empresa_id)->first();
                $enderecoempresa = EnderecoEmpresa::where('empresa_id', $empresa->id)->first();
                 return view('3_dias.create',compact('automovel','empresa','enderecoempresa'))->withErrors(['msg' => 'este carro já esta agendado nessas datas escolhidas por você! voce pode ou escolher outras datas ou outros carros! tente novamente com outras datas ou outros carro']);

                /* 
                 return redirect()->route('Empresa')->with('alert-danger','as datas que você escolheu ja esta agendada no sistema para esse carro retorne e tente novamente com outro carro');*/
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

   
    public function edit($id)
    {
        $Agendamento_3_dia = Agendamento_3_dias::findorFail($id);
        $automovel =Automovel::get();
        return view('3_dias.edit',['Agendamento_3_dia'=>$Agendamento_3_dia],['automovel'=>$automovel]);
       
    }


    public function update($id, Request $request){
         $agendamento_3_dias = Agendamento_3_dias::find($id);

         $agendamento_3_dias->dia1 = $request->dia1;
         $agendamento_3_dias->dia2 = $request->dia2;
         $agendamento_3_dias->dia3 = $request->dia3;

         $feriado=Feriado::get();
            $automovel=Automovel::get();
            $quinze_dias=Agendamento_15_dias::join('automovels as a','a.id','=','agendamento_15_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
           
         //validando com tabela 3 dias 
             $agendamento_3_dias1= Agendamento_3_dias::join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')->where('a.id',$request->automovel_id)->get();
            
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
                  
                  if ($qtd_r > 0) {
                    return redirect()->back()->withErrors(['msg' => 'este carro ja foi agendado nestas datas']);
                }  
             } 
            
            
           
             // validando com a tabela feriado 
            foreach($feriado as $feriad) 
            {
                if(($feriad->dia1 == $request->dia1) or ($feriad->data == $request->dia2) or ($feriad->data == $request->dia3) )
                   

                return redirect()->back()->withErrors(['msg' => 'você escolheu uma data que e um dia de feriado por favor retorne e tente outra data']);
            }
           

            //validando com 15 dias 

            foreach($quinze_dias as $quinze_d) 
            {

            if(($request->dia1 ==$quinze_d->dia1 ) or 
                ($request->dia1==$quinze_d->dia2  ) or 
                ($request->dia1==$quinze_d->dia3) or 
                ($request->dia1==$quinze_d->dia4) or 
                ($request->dia1==$quinze_d->dia5) or 
                ($request->dia1==$quinze_d->dia6) or 
                ($request->dia1==$quinze_d->dia6) or 
                ($request->dia1==$quinze_d->dia7) or 
                ($request->dia1==$quinze_d->dia8) or 
                ($request->dia1==$quinze_d->dia9) or 
                ($request->dia1==$quinze_d->dia10) or 
                ($request->dia1==$quinze_d->dia11) or 
                ($request->dia1==$quinze_d->dia12) or 
                ($request->dia1==$quinze_d->dia13) or 
                ($request->dia1==$quinze_d->dia14) or 
                ($request->dia1==$quinze_d->dia15)) {


                    $qtd_r++;

                }                
           

            if(($request->dia2 ==$quinze_d->dia1 ) or 
                ($request->dia2==$quinze_d->dia2  ) or 
                ($request->dia2==$quinze_d->dia3) or 
                ($request->dia2==$quinze_d->dia4) or 
                ($request->dia2==$quinze_d->dia5) or 
                ($request->dia2==$quinze_d->dia6) or 
                ($request->dia2==$quinze_d->dia6) or 
                ($request->dia2==$quinze_d->dia7) or 
                ($request->dia2==$quinze_d->dia8) or 
                ($request->dia2==$quinze_d->dia9) or 
                ($request->dia2==$quinze_d->dia10) or 
                ($request->dia2==$quinze_d->dia11) or 
                ($request->dia2==$quinze_d->dia12) or 
                ($request->dia2==$quinze_d->dia13) or 
                ($request->dia2==$quinze_d->dia14) or 
                ($request->dia2==$quinze_d->dia15)) {

                            $qtd_r++;

                }               
            
        
             if(($request->dia3 ==$quinze_d->dia1) or 
                ($request->dia3==$quinze_d->dia2) or 
                ($request->dia3==$quinze_d->dia3) or 
                ($request->dia3==$quinze_d->dia4) or 
                ($request->dia3==$quinze_d->dia5) or 
                ($request->dia3==$quinze_d->dia6) or 
                ($request->dia3==$quinze_d->dia6) or 
                ($request->dia3==$quinze_d->dia7) or 
                ($request->dia3==$quinze_d->dia8) or 
                ($request->dia3==$quinze_d->dia9) or 
                ($request->dia3==$quinze_d->dia10) or 
                ($request->dia3==$quinze_d->dia11) or 
                ($request->dia3==$quinze_d->dia12) or 
                ($request->dia3==$quinze_d->dia13) or 
                ($request->dia3==$quinze_d->dia14) or 
                ($request->dia3==$quinze_d->dia15)) {

                            $qtd_r++;

                }  
                if ($qtd_r > 0) {
                    return redirect()->back()->withErrors(['msg' => 'este carro ja foi agendado nestas datas']);
                }  
            }

           

         $agendamento_3_dias->save();


         $agendamento_3_dias = Agendamento_3_dias::join('empresas as e','e.id','=','agendamento_3_dias.empresa_id')
                ->join('users as u', 'u.id','=','e.user_id')->where('u.id', auth()->user()->id )
                ->join('endereco_empresas as ee','ee.id','=','agendamento_3_dias.empresa_id')
                ->join('automovels as a','a.id','=','agendamento_3_dias.automovel_id')
                ->select('e.id as empresa_id','u.id as user_id','ee.id as endereco_empresa_id','a.id as automovel_id', 
            'e.*','u.*','ee.*','a.*', 'agendamento_3_dias.*')->get();  
    

        return view('3_dias.index',compact('agendamento_3_dias'));
    }//final do metodo update

   
    public function destroy($id)
    {
        $agendamento_3_dias=agendamento_3_dias::findOrFail($id);
        $agendamento_3_dias->delete();


        return view('3_dias.index');
        
       
    }
}
