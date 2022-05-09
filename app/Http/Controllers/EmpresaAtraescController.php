<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empresa;
use App\Models\EnderecoEmpresa;

class EmpresaAtraescController extends Controller
{
    public function index()
    {
        //
        $empresa=Empresa::all();
        $enderecoempresa=EnderecoEmpresa::all();
        
        return view('empresa_atraesc.index',compact('empresa','enderecoempresa'));
    }
}
