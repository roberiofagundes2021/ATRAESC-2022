<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAgendamento_15_diasRequest;
use App\Models\Agendamento_15_dias;
use App\Models\Contrato;
use App\Models\Feriado;

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
  public function store(StoreAgendamento_15_diasRequest $request)
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

         $feriado=Feriado::get();

        foreach($feriado as $feriad) 
        {
            if(($feriad->data == $request->dia1) or ($feriad->data == $request->dia2) or ($feriad->data == $request->dia3) or ($feriad->data == $request->dia4) or ($feriad->data == $request->dia5) or ($feriad->data == $request->dia6) or ($feriad->data == $request->dia7) or ($feriad->data == $request->dia8) or ($feriad->data == $request->dia9) or ($feriad->data == $request->dia10) or ($feriad->data == $request->dia11) or ($feriad->data == $request->dia12) or ($feriad->data == $request->dia13) or ($feriad->data == $request->dia14) or ($feriad->data == $request->dia15));
            
              return redirect()->route('Agendamento15Dias.create')->with('mensagem', 'Agendamento cadastrado com sucesso!');
        }

        $Agendamento_15_dias->save();

         $contrato = Contrato::join('empresas as ee','ee.id','=','contratos.empresa_id')->join('users', 'users.id','=','ee.user_id')->where('users.id', auth()->user()->id)
            ->join('endereco_empresas','endereco_empresas.id','=','contratos.endereco_empresa_id')
            ->join('automovels','automovels.id','=','contratos.automovel_id')
            ->join('agendamento_15_dias','agendamento_15_dias.id','=','contratos.agendamento_15_dias_id')->get();

             $id = $Agendamento_15_dias->id;

        return view('pdf_15_dias.pdf', compact('id','contrato'))->with('success',"criador com successo.");

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
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendamento_15_diasRequest  $request
     * @param  \App\Models\Agendamento_15_dias  $agendamento_15_dias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAgendamento_15_diasRequest $request, Agendamento_15_dias $agendamento_15_dias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento_15_dias  $agendamento_15_dias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Agendamento_15_dias $agendamento_15_dias)
    {
        //
    }
}
