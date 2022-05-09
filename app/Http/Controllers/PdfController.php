<?php

namespace App\Http\Controllers;
use IlluminateSupportFacadesDB;
use Illuminate\Http\Request;
use App\Models\Agendamento;
use App\Models\Agendamento_3_dias;
use App\Models\Agendamento_15_dias;
use App\Models\Automovel;
use App\Models\EnderecoEmpresa;
use App\Models\Empresa;
use App\Models\Cliente;
use App\Models\Contrato;
use PDF;




class PdfController extends Controller
{
    //

    public function index()
    {
        /*
        $empresa = Empresa::all();
        $agendamento = Agendamento::all();
        $automovel = Automovel::all();
        $enderecoempresa = EnderecoEmpresa::all();
        $agendamento_15_dias = Agendamento_15_dias::all();
        $cliente = Cliente::get();
        */

        $contrato = Contrato::join('empresas as ee','ee.id','=','contratos.empresa_id')
                ->join('users', 'users.id','=','ee.user_id')->where('users.id', auth()->user()->id)
                ->join('endereco_empresas','endereco_empresas.id','=','contratos.endereco_empresa_id')
                ->join('automovels','automovels.id','=','contratos.automovel_id')
                ->join('agendamento_3_dias','agendamento_3_dias.id','=','contratos.agendamento_3_dias_id')->get();


        return \PDF::loadView('pdf.pdf', compact('contrato'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->download('contrato_de_locação-pdf-gerado.pdf');

    }
}
