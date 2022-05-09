<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreClienteRequest;
use App\Models\Cliente;
use App\Models\EnderecoCliente;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $cliente = Cliente::all();
    
        
        return view('cliente.index',compact('cliente'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $cliente = Cliente::get();
      
        return view('cliente.create',compact('cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreClienteRequest $request)
    {
        //
        $cliente = new Cliente();
        $cliente->nome=$request->nome;
        $cliente->idade=$request->idade;
        $cliente->sexo=$request->sexo;
        $cliente->cpf=$request->cpf;
        $cliente->renach=$request->renach;
        $cliente->rg=$request->rg;
        $cliente->save();

         $id = $cliente->id;
                        
            return view('agendamento.create_agendamento', compact('id'))
                        ->with('success','Hotel criador com successo.');
    }


 
    public function edit($id)
    {
        //
        $Cliente = Cliente::findorFail($id);
        return view('cliente.edit',['Cliente'=>$Cliente]);

    }

 
    public function update(Request $request){
        Cliente::find($request->id)->update($request->except('_method'));
         return redirect('index/Cliente')->with('msg', 'alteração realizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        Cliente::findorFail($id)->delete();
        
        return redirect('Cliente.index')->with('msg', 'cliente apagada');
    }
}
