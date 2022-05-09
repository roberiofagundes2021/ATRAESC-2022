<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEnderecoClienteRequest;
use App\Models\Endereco_Cliente;

class EnderecoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $endereco_Cliente=Endereco_Cliente::all();
        
        return view('Endereco_Cliente.index_Endereco_Cliente',compact('Endereco_Cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $Endereco_Cliente=Endereco_Cliente::all();
        
        return view('Endereco_Cliente.index_Endereco_Cliente',compact('Endereco_Cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEndereco_ClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEnderecoClienteRequest $request)
    {
        //
        $Endereco_Cliente = new Endereco_Cliente();
        $Endereco_Cliente->país=$request->país;
        $Endereco_Cliente->estado=$request->estado;
        $Endereco_Cliente->cidade=$request->cidade;
         $Endereco_Cliente->bairro=$request->bairro;
        $Endereco_Cliente->rua=$request->rua;
        $Endereco_Cliente->numero=$request->numero;
        $Endereco_Cliente->cliente_id=$request->cliente_id;
        $Endereco_Cliente->save();
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Endereco_Cliente  $endereco_Cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Endereco_Cliente $endereco_Cliente)
    {
        //
        $Endereco_Cliente = Contato_Cliente::findorFail($id);
        return view('Endereco_Client.edit',['Endereco_Client'=>$Endereco_Client]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEndereco_ClienteRequest  $request
     * @param  \App\Models\Endereco_Cliente  $endereco_Cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEndereco_ClienteRequest $request, Endereco_Cliente $endereco_Cliente)
    {
        //
        
        Endereco_Cliente::find($request->id)->update($request->except('_token'));
        return redirect('index/Endereco_Cliente')->with('msg', 'alteração realizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Endereco_Cliente  $endereco_Cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Endereco_Cliente $endereco_Cliente)
    {
        //
        Endereco_Cliente::findorFail($id)->delete();
        
        return redirect('Endereco_Cliente.index')->with('msg', 'Endereco Cliente do cliente apagada');
    }
}

