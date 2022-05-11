<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreEmpresaRequest;
use App\Models\Empresa;
use App\Models\EnderecoEmpresa;
use Illuminate\Support\Facades\DB;


class EmpresaController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function index()
    {
        /*
      
        $empresa = Empresa::join('endereco_empresas','endereco_empresas.id','=','empresas.id')
        ->join('users', 'users.id','=','empresas.user_id')->where('users.id', auth()->user()->id)->get();
        */

        $empresa = Empresa::join('endereco_empresas','endereco_empresas.id','=','empresas.id')
        ->join('users', 'users.id','=','empresas.user_id')->where('users.id', auth()->user()->id)->select('empresas.*')->get();
       


        
        return view('empresa.index',compact('empresa'));
    }

     public function alugar_carro(Request $request)
    {
      
       
        $empresa=Empresa::all();
        $enderecoempresa=EnderecoEmpresa::join('empresas','endereco_empresas.id','=','empresas.id')
        ->join('users', 'users.id','=','empresas.user_id')->where('users.id', auth()->user()->id)
        ->select('endereco_empresas.id as endereco_id',
                'empresas.id as empresa_id',
                'users.id as user_id',
                'empresas.*','users.*','endereco_empresas.*')->get();

       
        return view('qtd_dias.create',compact('empresa','enderecoempresa'));
    }
   

    public function create()
    {
        //
        $empresa1 = Empresa::get();
      
        return view('empresa.create',compact('empresa1'));
        }
    

   

    public function store(StoreEmpresaRequest $request)
    {

        $empresa = new Empresa();
        $empresa->razao_social=$request->razao_social;
        $empresa->cnpj=$request->cpnj;
        $empresa->solicitante=$request->solicitante;
        $empresa->telefone=$request->telefone;
        $empresa->email=$request->email;
        $empresa['user_id'] = auth()->user()->id;
        $empresa->save();
        $id = $empresa->id;
                 
         
            return view('endereco_empresa.create', compact('id'))
                        ->with('success','automovel criador com successo.');


    }


   

    public function edit($id)
    {
        //
        $Empresa = Empresa::findorFail($id);
        return view('empresa.edit',['Empresa'=>$Empresa]);
    }

   
    public function update(Request $request){
        Empresa::find($request->id)->update($request->except('_method'));
         return redirect('/index/Empresa')->with('msg', 'empresa apagada');
    }


    public function destroy($id)
    {
        //
        $Empresa=Empresa::findOrFail($id);
        $Empresa->delete();
        
        return redirect('/index/Empresa')->with('msg', 'empresa apagada');
    }

}