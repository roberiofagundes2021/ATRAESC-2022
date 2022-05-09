<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Agendamento_3_dias;
use App\Models\Automovel;
use App\Models\EnderecoEmpresa;
use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\Contrato;
use Illuminate\Support\Facades\DB;


class  ContratoController extends Controller
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
        $contrato = Contrato::get();
        

         return view('contrato.create',compact(['contrato']));
    }


     public function store(Request $request)
    {
        $contrato = new Contrato();
        $contrato->empresa_id=$request->empresa_id;
        $contrato->endereco_empresa_id=$request->endereco_empresa_id;
        $contrato->agendamento_3_dias_id=$request->agendamento_3_dias_id;
        $contrato->agendamento_15_dias_id=$request->agendamento_15_dias_id;
        $contrato->automovel_id=$request->automovel_id;
        $contrato->save();



         $contrato = Contrato::join('empresas as ee','ee.id','=','contratos.empresa_id')
            ->join('endereco_empresas','endereco_empresas.id','=','contratos.endereco_empresa_id')
            ->join('automovels','automovels.id','=','contratos.automovel_id')
            ->join('agendamento_3_dias','agendamento_3_dias.id','=','contratos.agendamento_3_dias_id')->get();

            $id = $contrato->id;
            $enderecoEmpresa = $contrato->endereco_empresa_id;
            $agendamento_3_dias = $contrato->agendamento_3_dias_id;
            $agendamento_15_dias = $contrato->agendamento_15_dias_id;



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
