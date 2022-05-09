<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreContatoClienteRequest;
use App\Models\Contato_Cliente;

class ContatoClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $contato_Cliente=Contato_Cliente::all();
        
        return view('Contato_Cliente.index_Contato_Cliente',compact('contato_Cliente'));
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $contato_Cliente = Contato_Cliente::get();
      
        return view('Contato_Cliente.create_Contato_Cliente',compact('contato_Cliente'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContato_ClienteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreContatoClienteRequest $request)
    {
        //
        $contato_Cliente = new Contato_Cliente();
        $contato_Cliente->telefone=$request->telefone;
        $contato_Cliente->email=$request->email;
        $cliente->celular=$request->celular;
        $cliente->cliente_id =$request->cliente_id;
        $cliente->save();
    }

   

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contato_Cliente  $contato_Cliente
     * @return \Illuminate\Http\Response
     */
    public function edit(Contato_Cliente $contato_Cliente)
    {
        //
        $Contato_Cliente = Contato_Cliente::findorFail($id);
        return view('Contato_Cliente.edit',['Contato_Cliente'=>$Contato_Cliente]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContato_ClienteRequest  $request
     * @param  \App\Models\Contato_Cliente  $contato_Cliente
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateContato_ClienteRequest $request, Contato_Cliente $contato_Cliente)
    {
        //
        Contato_Cliente::find($request->id)->update($request->except('_token'));
        return redirect('index/Contato_Cliente')->with('msg', 'alteração realizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contato_Cliente  $contato_Cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contato_Cliente $contato_Cliente)
    {
        //
        Contato_Cliente::findorFail($id)->delete();
        
        return redirect('Contato_Cliente.index')->with('msg', 'Contato do cliente apagada');
    }
}
