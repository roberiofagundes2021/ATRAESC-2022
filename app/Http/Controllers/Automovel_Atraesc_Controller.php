<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreAutomovel_AtraescRequest;

use App\Models\Automovel;

class Automovel_Atraesc_Controller extends Controller
{
     public function index()
    {
        //
     
        //$id=auth()->user()->id;
        $automovel=Automovel::all();
        
        return view('automovel_ATRAESC.index',compact('automovel'));
    }


    public function create()
    {
        //
        $automovel = Automovel::get();
      
        return view('automovel_ATRAESC.create',compact('automovel'));
    }
    

  
    public function store(StoreAutomovel_AtraescRequest $request)
    {
        //

        $automovel = new Automovel();
        $automovel->marca=$request->marca;
        $automovel->modelo=$request->modelo;
        $automovel->placa=$request->placa;
        $automovel->ano=$request->ano;
        $automovel->cor=$request->cor;
        $automovel->save();

        return redirect('/index/Automovel_atraesc')->with('msg', 'empresa apagada');
    }

 
    public function edit($id)
    {
        //
        $automovel = Automovel::findorFail($id);
        return view('automovel_ATRAESC.edit',['Automovel'=>$automovel]);
    }
   
   public function update(Request $request){
        Automovel::find($request->id)->update($request->except('_method'));
         return redirect('/index/Automovel_atraesc')->with('msg', 'empresa apagada');
    }


   
    public function destroy($id)
    {
        //
        $Automovel=Automovel::findorFail($id);
        $Automovel->delete();
        
        return redirect('index/Automovel')->with('msg', 'automovel apagada');
    }
}
