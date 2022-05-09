<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEnderecoEmpresaRequest;

use App\Models\EnderecoEmpresa;
use App\Models\Automovel;


class EnderecoEmpresaController extends Controller
{
    //
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        //
        $enderecoempresa=EnderecoEmpresa::all();
        
        return view('empresa.index',compact('enderecoempresa'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $enderecoempresa = EnderecoEmpresa::get();
      
        return view('endereco_empresa.create',compact('enderecoempresa'));
        }
    

   

    public function store(StoreEnderecoEmpresaRequest $request)
    {
        //
        $enderecoempresa = new EnderecoEmpresa();
        $enderecoempresa->pais=$request->pais;
        $enderecoempresa->estado=$request->estado;
        $enderecoempresa->cidade=$request->cidade;
        $enderecoempresa->bairro=$request->bairro;
        $enderecoempresa->rua=$request->rua;
        $enderecoempresa->numero=$request->numero;
        $enderecoempresa->empresa_id=$request->empresa_id;
        $enderecoempresa->qtd_dias_agendado=$request->qtd_dias_agendado;
        $enderecoempresa->save();

        if($request->qtd_dias_agendado=="3 dias"){
            $id = $enderecoempresa->id;
            $empresa_id = $enderecoempresa->empresa_id;
            $automovel=Automovel::get();
                        
            return view('3_dias.create', compact('empresa_id','automovel','id'))
                        ->with('success',' criador com successo.');
        
        }
        
        if($request->qtd_dias_agendado=="15 dias"){
        
            $empresa_id = $enderecoempresa->empresa_id;
            $automovel=Automovel::get();
                        
            return view('15_dias.create', compact('empresa_id','automovel'))
                        ->with('success','Hotel criador com successo.');
        
        }


    }

  

   

    public function edit($id)
    {
        //
        $EnderecoEmpresa = EnderecoEmpresaController::findorFail($id);
        return view('endereco_empresa.edit',['EnderecoEmpresaController'=>$EnderecoEmpresa]);
    }

   
    public function update(Request $request)
    {
        //
        EnderecoEmpresaController::find($request->id)->update($request->except('_token'));
        return redirect('/index/Empresa')->with('msg', 'alteração realizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Automovel  $automovel
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $EnderecoEmpresaController=EnderecoEmpresaController::findOrFail($id);
        $EnderecoEmpresaController->delete();
        
        return redirect('/index/Empresa')->with('msg', 'empresa apagada');
    }
}