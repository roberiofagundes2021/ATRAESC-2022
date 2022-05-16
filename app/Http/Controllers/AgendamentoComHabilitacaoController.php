<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAgendamento_com_HabilitacaoRequest;
use App\Models\Agendamento_Com_Habilitacao;
use App\Models\Automovel;
class AgendamentoComHabilitacaoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $agendamento_Com_Habilitacao = Agendamento_Com_Habilitacao::all();
        $automovels = Automovel::all();
        
        return view('exame_pratico.index',compact(['automovels','agendamento_Com_Habilitacao']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $agendamento_Com_Habilitacao = Agendamento_Com_Habilitacao::get();
        $automovels = Automovel::get();
    

         return view('exame_pratico.index',compact(['agendamento_Com_Habilitacao','automovels']));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAgendamento_Com_HabilitacaoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAgendamento_com_HabilitacaoRequest $request)
    {
        //
    $agendamento_Com_Habilitacao = new Agendamento_Com_Habilitacao();
    $agendamento_Com_Habilitacao->dia1=$request->dia1;
    $agendamento_Com_Habilitacao->dia2=$request->dia2;
    $agendamento_Com_Habilitacao->dia3=$request->dia3;
    $agendamento_Com_Habilitacao->agendamento_id=$request->agendamento_id;
    $agendamento_Com_Habilitacao->automovel_id=$request->automovel_id;
   
    $agendamento_Com_Habilitacao->save();


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Agendamento_Com_Habilitacao  $agendamento_Com_Habilitacao
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Agendamento_Com_Habilitacao  $agendamento_Com_Habilitacao
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
        $Agendamento_Com_Habilitacao=Agendamento_Com_Habilitacao::findorFail($id);
            return view('agendamento_Com_Habilitacao.edit_agendamento_Com_Habilitacao',['Agendamento_Com_Habilitacao'=>$Agendamento_Com_Habilitacao]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAgendamento_Com_HabilitacaoRequest  $request
     * @param  \App\Models\Agendamento_Com_Habilitacao  $agendamento_Com_Habilitacao
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
        Agendamento_Com_Habilitacao::find($request->id)->update($request->except('_token'));
            return redirect('index_Agendamento_Com_Habilitacao/Agendamento_Com_Habilitacao')->with('msg', 'alteração realizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Agendamento_Com_Habilitacao  $agendamento_Com_Habilitacao
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Agendamento_Com_Habilitacao::findorFail($id)->delete();
          return redirect('exame_pratico.index')->with('msg', 'Agendamento_Com_Habilitacao');
    }
}
