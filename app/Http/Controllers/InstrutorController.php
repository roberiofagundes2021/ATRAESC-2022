<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\StoreInstrutorRequest;
use App\Models\Instrutor;

class InstrutorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        $instrutor=Instrutor::all();
        
        return view('instrutor.index',compact('instrutor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $instrutor=Instrutor::get();
        
        return view('instrutor.create',compact('instrutor'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreInstrutorRequest  $request
     * @return \Illuminate\Http\Response
     */


    public function store(StoreInstrutorRequest $request)
    {
        //
        
        $instrutor = new Instrutor();
        $instrutor->nome=$request->nome;
        $instrutor->cpf=$request->cpf;
        $instrutor->rg=$request->rg;
        $instrutor->habilitacao=$request->habilitacao;
        $instrutor->save();

         return redirect('/index/Instrutor')->with('msg', '');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Instrutor  $instrutor
     * @return \Illuminate\Http\Response
     */
    public function show(Instrutor $instrutor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Instrutor  $instrutor
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
         $Instrutor = Instrutor::findorFail($id);
        return view('instrutor.edit',['Instrutor'=>$Instrutor]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateInstrutorRequest  $request
     * @param  \App\Models\Instrutor  $instrutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
       Instrutor::find($request->id)->update($request->except('_token'));
        return redirect('/index/Instrutor')->with('msg', '');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Instrutor  $instrutor
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $Cliente=Instrutor::findorFail($id);
        $Cliente->delete();
        
        return redirect('/index/Instrutor')->with('msg', '');
    }
}

