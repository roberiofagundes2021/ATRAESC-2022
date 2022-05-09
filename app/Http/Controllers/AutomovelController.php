<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAutomovelRequest;

use App\Models\Automovel;

class AutomovelController extends Controller
{
   public function index()
    {
        //
     
        //$id=auth()->user()->id;
        $automovel=Automovel::all();
        
        return view('automovel.index',compact('automovel'));
    }


    public function create_automovel_empresa()
    {
        //
        $automovel = Automovel::get();
      
        return view('automovel_ATRAESC.create',compact('automovel'));
    }
    

  
    public function store(StoreAutomovelRequest $request)
    {
        //
        $automovel = new Automovel();
        $automovel->nome=$request->nome;
        $automovel->marca=$request->marca;
        $automovel->modelo=$request->modelo;
        $automovel->placa=$request->placa;
        $automovel->save();

        return redirect('/index/Automovel')->with('msg', 'empresa apagada');
    }

 
    public function edit($id)
    {
        //
        $automovel = Automovel::findorFail($id);
        return view('automovel.edit',['Automovel'=>$automovel]);
    }

    public function edit_empresa($id)
    {
        //
        $automovel = Automovel::findorFail($id);
        return view('automovel.edit',['Automovel'=>$automovel]);
    }
   
    public function update(Request $request)
    {
        //
        Automovel::find($request->id)->update($request->except('_token'));
        return redirect('/index/Automovel')->with('msg', 'alteração realizado com sucesso');
    }


    public function update_empresa(Request $request)
    {
        //
        Automovel::find($request->id)->update($request->except('_token'));
        return redirect('/index/Automovel')->with('msg', 'alteração realizado com sucesso');
    }

   
    public function destroy($id)
    {
        //
        $Automovel=Automovel::findorFail($id);
        $Automovel->delete();
        
        return redirect('index/Automovel')->with('msg', 'automovel apagada');
    }

}
