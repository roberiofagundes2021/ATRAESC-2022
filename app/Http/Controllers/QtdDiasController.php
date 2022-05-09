<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreEnderecoEmpresaRequest;
use App\Models\Automovel;

use App\Http\Requests\StoreQtd_diasRequest;
use App\Http\Requests\UpdateQtd_diasRequest;
use App\Models\Qtd_dias;
use App\Models\Empresa;
use App\Models\EnderecoEmpresa;

class QtdDiasController extends Controller
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
    public function create($id)
    {
        //
         $qtd_dias=Qtd_dias::get();
         $enderecoempresa=EnderecoEmpresa::findorFail($id);

        dd($enderecoempresa);
      
    
        return view('qtd_dias.create', ['enderecoempresa' => $enderecoempresa]);
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreQtd_diasRequest  $request
     * @return \Illuminate\Http\Response
     */
   public function store(Request $request)
    {
        //
        $qtd_dias = new Qtd_dias(); 
        $qtd_dias->qtd_dias_agendado=$request->qtd_dias_agendado;
        $qtd_dias->empresa_id=$request->empresa_id;
        $qtd_dias->save();

        if($request->qtd_dias_agendado=="3 dias"){
            $id = $qtd_dias->id;
            $empresa_id = $qtd_dias->empresa_id;
            $automovel=Automovel::get();
            $enderecoempresa=EnderecoEmpresa::all();
      
     
        
      

            

            

       

            return view('3_dias.create', compact('id','empresa_id','automovel','enderecoempresa'))->with('message', 'Produto gravado com sucesso!');

                        dd($enderecoempresa);


        
        }
        
        if($request->qtd_dias_agendado=="15 dias"){
            $id = $qtd_dias->id;
            $empresa_id = Request::query('id');
            $automovel=Automovel::get();
                        
            return view('15_dias.create', compact('id','empresa_id','automovel'))
                        ->with('success','Hotel criador com successo.');
        
        }


    }


    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Qtd_dias  $qtd_dias
     * @return \Illuminate\Http\Response
     */
    public function show(Qtd_dias $qtd_dias)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Qtd_dias  $qtd_dias
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        //
        $Empresa = Empresa::findorFail($id);
        return view('empresa.edit',['Empresa'=>$Empresa]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateQtd_diasRequest  $request
     * @param  \App\Models\Qtd_dias  $qtd_dias
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateQtd_diasRequest $request, Qtd_dias $qtd_dias)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Qtd_dias  $qtd_dias
     * @return \Illuminate\Http\Response
     */
    public function destroy(Qtd_dias $qtd_dias)
    {
        //
    }
}
