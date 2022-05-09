<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Requests\StoreFeriadoRequest;

use App\Models\Feriado;

class FeriadoController extends Controller
{
   
    public function index()
    {

         $feriado=Feriado::all();

        
        return view('dias_nao_util.index',compact('feriado'));
    }

 
    public function create()
    {
        //
        $feriado=Feriado::get();

        return view('dias_nao_util.create',compact('feriado'));
    }

   
    public function store(StoreFeriadoRequest $request)
    {
        //

        $feriado = new Feriado();
        $feriado->nome=$request->nome;
        $feriado->data=$request->data;
        $feriado->save();

        $feriado=Feriado::all();

        return view('dias_nao_util.index',compact('feriado'));
    }

   
     
    public function show(Feriado $feriado)
    {
        //
    }

  
    public function edit($id)
    {
        //
         $feriado = Feriado::findorFail($id);
        return view('dias_nao_util.edit',['feriado'=>$feriado]);
    }

    public function update(Request $request)
    {
        //
          Feriado::find($request->id)->update($request->except('_method'));
         return redirect('/index/feriado')->with('msg', 'feriado alterado');
    }

    
    public function destroy($id)
    {
        //
        $feriado=Feriado::findOrFail($id);
        $feriado->delete();
        
        return redirect('/index/feriado')->with('msg', 'feriado alterado');
    }
}
