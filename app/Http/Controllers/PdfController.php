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
        

        $contrato = Agendamento_3_dias::join('empresas as ee','ee.id','=','agendamento_3_dias.empresa_id')
            ->join('users', 'users.id','=','ee.user_id')->where('users.id', auth()->user()->id)
            ->join('endereco_empresas','endereco_empresas.id','=','agendamento_3_dias.empresa_id')
            ->join('automovels','automovels.id','=','agendamento_3_dias.automovel_id')->get();

         


            return view('pdf.pdf', compact('contrato'))->with('success',' criador com successo.');

        /*
        para baixar pdf 
        return \PDF::loadView('pdf.pdf', compact('contrato'))
                // Se quiser que fique no formato a4 retrato: ->setPaper('a4', 'landscape')
                ->download('contrato_de_locação-pdf-gerado.pdf');
        */

    }
}
