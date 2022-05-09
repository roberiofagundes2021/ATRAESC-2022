<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\Carro;
use App\Models\Cliente;

class AtraescController extends Controller
{
  
    public function index()
    {
        //
        $agendamento = Agendamento::all();
        
        return view('agendamento.index',compact('agendamento'));
    }


    public function create()
    {
        //
        $agendamento = Agendamento::get();
      
        return view('agendamento.create_agendamento',compact('agendamento'));
    }

  
   

    public function store(Request $request)
    {
        //
        
        $agendamento = new Agendamento();
        $agendamento->habilitado=$request->habilitado;
        $agendamento->cliente_id=$request->cliente_id;
        
        $agendamento->save();
        
        if($request->habilitado=="1ª habilitação"){
        
            $id = $agendamento->id;
                        
            return view('primeira_habilitacao.create', compact('id'))
                        ->with('success',' criador com successo.');
        
        }
        
        if($request->habilitado=="Exame prático"){
        
            $id = $agendamento->id;
                        
            return view('exame_pratico.create', compact('id'))
                        ->with('success','Hotel criador com successo.');
        
        }
        
        
        
    }

  
    public function show(Agendamento $agendamento)
    {
        //
        
    }

 
    public function edit(Agendamento $agendamento)
    {
        //
        $Agendamento=Agendamento::findorFail($id);
        
        return view('Agendamento.edit_Agendamento',['Agendamento'=>$Agendamento]);
    }

   
    public function update(UpdateAgendamentoRequest $request, Agendamento $agendamento)
    {
        //
        Agendamento::find($request->id)->update($request->except('_token'));
            return redirect('index_agendamento/agendamento')->with('msg', 'alteração realizado com sucesso');
    }

    public function destroy(Agendamento $agendamento)
    {
        //
        Agendamento_sem_Habilitacao::findorFail($id)->delete();
          return redirect('Agendamento.index_Agendamento')->with('msg', 'Agendamento');
    }
}
