<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAgendamento_sem_HabilitacaoRequest;
use App\Models\Agendamento_sem_Habilitacao;
use App\Models\Agendamento;

class AgendamentoSemHabilitacaoController extends Controller
{
     public function index()
    {
        
        $Agendamento_sem_Habilitacao = Agendamento_sem_Habilitacao::all();
        return view('Agendamento_sem_Habilitacao.index_Agendamento_sem_Habilitacao'['Agendamento_sem_Habilitacao']);

    }

     public function create(){
    $Agendamento_sem_Habilitacao=Agendamento_sem_Habilitacao::get();
    $agendamento=Agendamento::get();

    return view('primeira_habilitacao.create',compact('Agendamento_sem_Habilitacao','agendamento'));
    }


    public function store(StoreAgendamento_sem_HabilitacaoRequest $request)
    {
        //
        $Agendamento_sem_Habilitacao = new Agendamento_sem_Habilitacao();
        $Agendamento_sem_Habilitacao->dia1=$request->dia1;
        $Agendamento_sem_Habilitacao->dia2=$request->dia2;
        $Agendamento_sem_Habilitacao->dia3=$request->dia3;
        $Agendamento_sem_Habilitacao->dia4=$request->dia4;
        $Agendamento_sem_Habilitacao->dia5=$request->dia5;
        $Agendamento_sem_Habilitacao->dia6=$request->dia6;
        $Agendamento_sem_Habilitacao->dia7=$request->dia7;
        $Agendamento_sem_Habilitacao->dia8=$request->dia8;
        $Agendamento_sem_Habilitacao->dia9=$request->dia9;
        $Agendamento_sem_Habilitacao->dia10=$request->dia10;
        $Agendamento_sem_Habilitacao->dia11=$request->dia11;
        $Agendamento_sem_Habilitacao->dia12=$request->dia12;
        $Agendamento_sem_Habilitacao->dia13=$request->dia13;
        $Agendamento_sem_Habilitacao->dia14=$request->dia14;
        $Agendamento_sem_Habilitacao->dia15=$request->dia15;
        $Agendamento_sem_Habilitacao->agendamento_id=$request->agendamento_id;
        $Agendamento_sem_Habilitacao->automovel_id=$request->automovel_id;

        $Agendamento_sem_Habilitacao->save();



    }

    
    public function show(Agendamento_sem_Habilitacao $agendamento_sem_Habilitacao)
    {
        //
    }
    
    
    public function edit(Agendamento_sem_Habilitacao $agendamento_sem_Habilitacao)
    {
        //
        $Agendamento_sem_Habilitacao=Agendamento_sem_Habilitacao::findorFail($id);

        return view('Agendamento_sem_Habilitacao.edit_Agendamento_sem_Habilitcao',['Agendamento_sem_Habilitacao'=>$Agendamento_sem_Habilitacao]);
    }

    
    public function update(Request $request, Agendamento_sem_Habilitacao $agendamento_sem_Habilitacao)
    {
    
        agendamento_sem_Habilitacao::find($request->id)->update($request->except('_token'));
            return redirect('index_agendamento_sem_Habilitacao/agendamento_sem_Habilitacao')->with('msg', 'alteração realizado com sucesso');
    }

   
    public function destroy(Agendamento_sem_Habilitacao $agendamento_sem_Habilitacao)
    {
        //
        agendamento_sem_Habilitacao::findorFail($id)->delete();
          return redirect('agendamento_sem_Habilitacao.index_agendamento_sem_Habilitacao')->with('msg', 'agendamento_sem_Habilitacao');
    }
}
