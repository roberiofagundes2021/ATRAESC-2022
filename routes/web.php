<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AgendamentoComHabilitacaoController;
use App\Http\Controllers\AgendamentoController;
use App\Http\Controllers\AgendamentoSemHabilitacaoController;
use App\Http\Controllers\AutomovelController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ContatoClienteController;
use App\Http\Controllers\EnderecoClienteController;
use App\Http\Controllers\EmpresaController;
use App\Http\Controllers\EnderecoEmpresaController;
use App\Http\Controllers\InstrutorController;
use App\Http\Controllers\Agendamento3DiasController;
use App\Http\Controllers\Agendamento15DiasController;
use App\Http\Controllers\DocumentosController;
use App\Http\Controllers\PdfController;
use App\Http\Controllers\Automovel_Atraesc_Controller;
use App\Http\Controllers\ContratoController;
use App\Http\Controllers\FeriadoController;
use App\Http\Controllers\EmpresaAtraescController;
use App\Http\Controllers\QtdDiasController;
use App\Http\Controllers\AtraescController;



/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    if(auth()->user()->is_admin == 1){

            return view('ATRAESC.create');

        }
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


/*Route::get('/pdf',[ContratoController::class,'index'])->name('pdf');*/

Route::get('/pdf',[PdfController::class,'index'])->name('pdf');

Route::get('/ATRAESC', function () {
    return view('ATRAESC.create');
})->middleware(['auth'])->name('ATRAESC');

//----------------------------------------------------------------------------------
Route::get('/index/Agendamento3Dias',[Agendamento3DiasController::class,'index'])->middleware(['auth'])->name('Agendamento3Dias.index');

Route::get('/create/Agendamento3Dias',[Agendamento3DiasController::class,'create'])->middleware(['auth'])->name('Agendamento3Dias.create');

Route::post('/create/Agendamento3Dias',[Agendamento3DiasController::class,'create'])->middleware(['auth'])->name('Agendamento3Dias.create');

Route::post('/store/Agendamento3Dias',[Agendamento3DiasController::class,'store'])->middleware(['auth'])->name('Agendamento3Dias.store');

Route::get('/store/Agendamento3Dias',[Agendamento3DiasController::class,'store'])->middleware(['auth'])->name('Agendamento3Dias.store');

Route::get('/Agendamento3Dias/show/{id}',[Agendamento3DiasController::class,'show'])->middleware(['auth'])->name('Agendamento3Dias.show');

Route::put('/Agendamento3Dias/update/{id}',[Agendamento3DiasController::class,'update'])->middleware(['auth'])->name('Agendamento3Dias.update');

Route::delete('/Agendamento3Dias/{id}',[Agendamento3DiasController::class, 'destroy'])->middleware(['auth'])->name('Agendamento3Dias.delete');


//----------------------------------------------------------------------------------

Route::get('/index/Agendamento15Dias',[Agendamento15DiasController::class,'index'])->middleware(['auth'])->name('Agendamento15Dias.index');

Route::get('/create/Agendamento15Dias',[Agendamento15DiasController::class,'create'])->middleware(['auth'])->name('Agendamento15Dias.create');

Route::post('/create/Agendamento15Dias',[Agendamento15DiasController::class,'create'])->middleware(['auth'])->name('Agendamento15Dias.create');

Route::post('/store/Agendamento15Dias',[Agendamento15DiasController::class,'store'])->middleware(['auth'])->name('Agendamento15Dias.store');

Route::get('/store/Agendamento15Dias',[Agendamento15DiasController::class,'store'])->middleware(['auth'])->name('Agendamento15Dias.store');

Route::get('/Agendamento15Dias/show/{id}',[Agendamento15DiasController::class,'show'])->middleware(['auth'])->name('Agendamento15Dias.show');

Route::put('/Agendamento15Dias/update/{id}',[Agendamento15DiasController::class,'update'])->middleware(['auth'])->name('Agendamento15Dias.update');

Route::delete('/Agendamento15Dias/{id}',[Agendamento15DiasController::class, 'destroy'])->middleware(['auth'])->name('Agendamento15Dias.delete');
//----------------------------------------------------------------------------------

Route::get('/index/AgendamentoComHabilitacao',[AgendamentoComHabilitacaoController::class,'index'])->middleware(['auth'])->name('AgendamentoComHabilitacao.index');

Route::get('/create/AgendamentoComHabilitacao',[AgendamentoComHabilitacaoController::class,'create'])->middleware(['auth'])->name('AgendamentoComHabilitacaoController.create');

Route::post('/create/AgendamentoComHabilitacao',[AgendamentoComHabilitacaoController::class,'create'])->middleware(['auth'])->name('AgendamentoComHabilitacao.create');

Route::post('/store/AgendamentoComHabilitacao',[AgendamentoComHabilitacaoController::class,'store'])->middleware(['auth'])->name('AgendamentoComHabilitacao.store');

Route::get('/store/AgendamentoComHabilitacao',[AgendamentoComHabilitacaoController::class,'store'])->middleware(['auth'])->name('AgendamentoComHabilitacao.store');

Route::get('/AgendamentoComHabilitacao/show/{id}',[AgendamentoComHabilitacaoController::class,'show'])->middleware(['auth'])->name('AgendamentoComHabilitacao.show');

Route::put('/AgendamentoComHabilitacao/update/{id}',[AgendamentoComHabilitacaoController::class,'update'])->middleware(['auth'])->name('AgendamentoComHabilitacao.update');

Route::delete('/AgendamentoComHabilitacao/{id}',[AgendamentoComHabilitacaoController::class, 'destroy'])->middleware(['auth'])->name('AgendamentoComHabilitacao.delete');
//----------------------------------------------------------------------------------


Route::get('/index/Agendamento',[AgendamentoController::class,'index'])->middleware(['auth'])->name('Agendamento.index');

Route::get('/create/Agendamento',[AgendamentoController::class,'create'])->middleware(['auth'])->name('Agendamento.create');

Route::post('/create/Agendamento',[AgendamentoController::class,'create'])->middleware(['auth'])->name('Agendamento.create');

Route::post('/store/Agendamento',[AgendamentoController::class,'store'])->middleware(['auth'])->name('Agendamento.store1');

Route::get('/store/Agendamento',[AgendamentoController::class,'store'])->middleware(['auth'])->name('Agendamento.store');

Route::get('/Agendamento/show/{id}',[AgendamentoController::class,'show'])->middleware(['auth'])->name('Agendamento.show');

Route::put('/Agendamento/update/{id}',[AgendamentoController::class,'update'])->middleware(['auth'])->name('Agendamento.update');

Route::delete('/Agendamento/{id}',[AgendamentoController::class, 'destroy'])->middleware(['auth'])->name('Agendamento.delete');
//----------------------------------------------------------------------------------

Route::get('/index/AgendamentoSemHabilitacao',[AgendamentoSemHabilitacaoController::class,'index'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.index');

Route::get('/create/AgendamentoSemHabilitacao',[AgendamentoSemHabilitacaoController::class,'create'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.create');

Route::post('/create/AgendamentoSemHabilitacao',[AgendamentoSemHabilitacaoController::class,'create'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.create');

Route::post('/store/AgendamentoSemHabilitacao',[AgendamentoSemHabilitacaoController::class,'store'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.store');

Route::get('/store/AgendamentoSemHabilitacao',[AgendamentoSemHabilitacaoController::class,'store'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.store');

Route::get('/AgendamentoSemHabilitacao/show/{id}',[AgendamentoSemHabilitacaoController::class,'show'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.show');

Route::put('/AgendamentoSemHabilitacao/update/{id}',[AgendamentoSemHabilitacaoController::class,'update'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.update');

Route::delete('/AgendamentoSemHabilitacao/{id}',[AgendamentoSemHabilitacaoController::class, 'destroy'])->middleware(['auth'])->name('AgendamentoSemHabilitacao.delete');

//----------------------------------------------------------------------------------


Route::get('/index/Automovel',[AutomovelController::class,'index'])->middleware(['auth'])->name('Automovel.index');


Route::get('/create/Automovel',[AutomovelController::class,'create_15dias_atraesc'])->middleware(['auth'])->name('Automovel.create_15dias');

Route::post('/create/Automovel',[AutomovelController::class,'create_15dias_atraesc'])->middleware(['auth'])->name('Automovel.create_15dias');

Route::post('/create/Automovel',[AutomovelController::class,'create_atraesc'])->middleware(['auth'])->name('Automovel.create_atraesc');


Route::get('/create/Automovel',[AutomovelController::class,'create'])->middleware(['auth'])->name('Automovel.create');

Route::post('/create/Automovel',[AutomovelController::class,'create'])->middleware(['auth'])->name('Automovel.create');

Route::get('/create/Automovel_empresa',[AutomovelController::class,'create_automovel_empresa'])->middleware(['auth'])->name('Automovel_empresa.create');

Route::post('/create/Automovel',[AutomovelController::class,'create_automovel_empresa'])->middleware(['auth'])->name('Automovel_empresa.create');

Route::post('/store/Automovel',[AutomovelController::class,'store'])->middleware(['auth'])->name('Automovel.store');

Route::get('/store/Automovel',[AutomovelController::class,'store'])->middleware(['auth'])->name('Automovel.store');

Route::get('/Automovel/show/{id}',[AutomovelController::class,'show'])->middleware(['auth'])->name('Automovel.show');

Route::put('/Automovel/update/{id}',[AutomovelController::class,'update'])->middleware(['auth'])->name('Automovel.update');

Route::delete('/Automovel/{id}',[AutomovelController::class, 'destroy'])->middleware(['auth'])->name('Automovel.delete');

Route::post('/Automovel/edit/{id}',[AutomovelController::class,'edit'])->middleware(['auth'])->name('Automovel.edit');
Route::get('/Automovel/edit/{id}',[AutomovelController::class,'edit'])->middleware(['auth'])->name('Automovel.edit');

//----------------------------------------------------------------------------------


Route::get('/index/Automovel_atraesc',[Automovel_Atraesc_Controller::class,'index'])->middleware(['auth'])->name('Automovel_atraesc.index');


Route::get('/create/Automovel_atraesc',[Automovel_Atraesc_Controller::class,'create'])->middleware(['auth'])->name('Automovel_atraesc.create');

Route::post('/create/Automovel_atraesc',[Automovel_Atraesc_Controller::class,'create'])->middleware(['auth'])->name('Automovel_atraesc.create');


Route::post('/store/Automovel_atraesc',[Automovel_Atraesc_Controller::class,'store'])->middleware(['auth'])->name('Automovel_atraesc.store');

Route::get('/store/Automovel_atraesc',[Automovel_Atraesc_Controller::class,'store'])->middleware(['auth'])->name('Automovel_atraesc.store');

Route::get('/Automovel_atraesc/show/{id}',[Automovel_Atraesc_Controller::class,'show'])->middleware(['auth'])->name('Automovel_atraesc.show');

Route::put('/Automovel_atraesc/update/{id}',[Automovel_Atraesc_Controller::class,'update'])->middleware(['auth'])->name('Automovel_atraesc.update');

Route::delete('/Automovel_atraesc/{id}',[Automovel_Atraesc_Controller::class, 'destroy'])->middleware(['auth'])->name('Automovel_atraesc.delete');

Route::post('/Automovel_atraesc/edit/{id}',[Automovel_Atraesc_Controller::class,'edit'])->middleware(['auth'])->name('Automovel_atraesc.edit');
Route::get('/Automovel_atraesc/edit/{id}',[Automovel_Atraesc_Controller::class,'edit'])->middleware(['auth'])->name('Automovel_atraesc.edit');

//---------------------------------------------------------------------------------------


Route::get('/index/ATRAESC',[AtraescController::class,'index'])->middleware(['auth'])->name('ATRAESC.index');

Route::get('/create/ATRAESC',[AtraescController::class,'create'])->middleware(['auth'])->name('ATRAESC.create');

Route::post('/create/ATRAESC',[AtraescController::class,'create'])->middleware(['auth'])->name('ATRAESC.create');

Route::post('/store/ATRAESC',[AtraescController::class,'store'])->middleware(['auth'])->name('ATRAESC.store');

Route::get('/store/ATRAESC',[AtraescController::class,'store'])->middleware(['auth'])->name('ATRAESC.store');

Route::get('/ATRAESC/show/{id}',[AtraescController::class,'show'])->middleware(['auth'])->name('ATRAESC.show');

Route::put('/ATRAESC/update/{id}',[AtraescController::class,'update'])->middleware(['auth'])->name('ATRAESC.update');

Route::delete('/ATRAESC/{id}',[AtraescController::class, 'destroy'])->middleware(['auth'])->name('ATRAESC.delete');

//----------------------------------------------------------------------------------

Route::get('/index/Cliente',[ClienteController::class,'index'])->middleware(['auth'])->name('Cliente.index');

Route::get('/create/Cliente',[ClienteController::class,'create'])->middleware(['auth'])->name('Cliente.create');

Route::post('/create/Cliente',[ClienteController::class,'create'])->middleware(['auth'])->name('Cliente.create');

Route::post('/store/Cliente',[ClienteController::class,'store'])->middleware(['auth'])->name('Cliente.store');

Route::get('/store/Cliente',[ClienteController::class,'store'])->middleware(['auth'])->name('Cliente.store');

Route::get('/Cliente/show/{id}',[ClienteController::class,'show'])->middleware(['auth'])->name('Cliente.show');

Route::put('/Cliente/update/{id}',[ClienteController::class,'update'])->middleware(['auth'])->name('Cliente.update');

Route::delete('/Cliente/{id}',[ClienteController::class, 'destroy'])->middleware(['auth'])->name('Cliente.delete');

Route::post('/Cliente/edit/{id}',[ClienteController::class,'edit'])->middleware(['auth'])->name('Cliente.edit');

Route::get('/Cliente/edit/{id}',[ClienteController::class,'edit'])->middleware(['auth'])->name('Cliente.edit');

//----------------------------------------------------------------------------------


Route::get('/index/ContatoCliente',[ContatoClienteController::class,'index'])->middleware(['auth'])->name('ContatoCliente');

Route::get('/create/ContatoCliente',[ContatoClienteController::class,'create'])->middleware(['auth'])->name('ContatoCliente.create');

Route::post('/create/ContatoCliente',[ContatoClienteController::class,'create'])->middleware(['auth'])->name('ContatoCliente.create');

Route::post('/store/ContatoCliente',[ContatoClienteController::class,'store'])->middleware(['auth'])->name('ContatoCliente.store');

Route::get('/store/ContatoCliente',[ContatoClienteController::class,'store'])->middleware(['auth'])->name('ContatoCliente.store');

Route::get('/ContatoCliente/show/{id}',[ContatoClienteController::class,'show'])->middleware(['auth'])->name('ContatoCliente.show');

Route::put('/ContatoCliente/update/{id}',[ContatoClienteController::class,'update'])->middleware(['auth'])->name('ContatoCliente.update');

Route::delete('/ContatoCliente/{id}',[ContatoClienteController::class, 'destroy'])->middleware(['auth'])->name('ContatoCliente.delete');

//----------------------------------------------------------------------------------

Route::get('/index/EnderecoCliente',[EnderecoClienteController::class,'index'])->middleware(['auth'])->name('EnderecoCliente');

Route::get('/create/EnderecoCliente',[EnderecoClienteController::class,'create'])->middleware(['auth'])->name('EnderecoCliente.create');

Route::post('/create/EnderecoCliente',[EnderecoClienteController::class,'create'])->middleware(['auth'])->name('EnderecoCliente.create');

Route::post('/store/EnderecoCliente',[EnderecoClienteController::class,'store'])->middleware(['auth'])->name('EnderecoCliente.store');

Route::get('/store/EnderecoCliente',[EnderecoClienteController::class,'store'])->middleware(['auth'])->name('EnderecoCliente.store');

Route::get('/EnderecoCliente/show/{id}',[EnderecoClienteController::class,'show'])->middleware(['auth'])->name('EnderecoCliente.show');

Route::put('/EnderecoCliente/update/{id}',[EnderecoClienteController::class,'update'])->middleware(['auth'])->name('EnderecoCliente.update');

Route::delete('/EnderecoCliente/{id}',[EnderecoClienteController::class, 'destroy'])->middleware(['auth'])->name('EnderecoCliente.delete');


//----------------------------------------------------------------------------------

Route::get('/index/Empresa',[EmpresaController::class,'index'])->middleware(['auth'])->name('Empresa');

Route::post('/index/alugar_carro/{idemp}',[EmpresaController::class,'alugar_carro'])->middleware(['auth'])->name('alugar_carro');
Route::get('/index/alugar_carro/{idemp}',[EmpresaController::class,'alugar_carro'])->middleware(['auth'])->name('alugar_carro');

Route::get('/create/Empresa',[EmpresaController::class,'create'])->middleware(['auth'])->name('Empresa.create');



Route::post('/create/Empresa',[EmpresaController::class,'create'])->middleware(['auth'])->name('Empresa.create');

Route::post('/store/Empresa',[EmpresaController::class,'store'])->middleware(['auth'])->name('Empresa.store');

Route::get('/store/Empresa',[EmpresaController::class,'store'])->middleware(['auth'])->name('Empresa.store');

Route::get('/Empresa/show/{id}',[EmpresaController::class,'show'])->middleware(['auth'])->name('Empresa.show');

Route::put('/Empresa/update/{id}',[EmpresaController::class,'update'])->middleware(['auth'])->name('Empresa.update');

Route::delete('/Empresa/{id}',[EmpresaController::class, 'destroy'])->middleware(['auth'])->name('Empresa.delete');

Route::post('/empresa/edit/{id}',[EmpresaController::class,'edit'])->middleware(['auth'])->name('empresa.edit');
Route::get('/empresa/edit/{id}',[EmpresaController::class,'edit'])->middleware(['auth'])->name('empresa.edit');

//----------------------------------------------------------------------------------
Route::get('/index/Empresa_atraesc',[EmpresaAtraescController::class,'index'])->middleware(['auth'])->name('EmpresaAtraesc');
//----------------------------------------------------------------------------------

Route::get('/index/EnderecoEmpresa',[EnderecoEmpresaController::class,'index'])->middleware(['auth'])->name('EnderecoEmpresa');

Route::get('/create/EnderecoEmpresa',[EnderecoEmpresaController::class,'create'])->middleware(['auth'])->name('EnderecoEmpresa.create');

Route::post('/create/EnderecoEmpresa',[EnderecoEmpresaController::class,'create'])->middleware(['auth'])->name('EnderecoEmpresa.create');

Route::post('/store/EnderecoEmpresa',[EnderecoEmpresaController::class,'store'])->middleware(['auth'])->name('EnderecoEmpresa.store');

Route::get('/store/EnderecoEmpresa',[EnderecoEmpresaController::class,'store'])->middleware(['auth'])->name('EnderecoEmpresa.store');

Route::get('/EnderecoEmpresa/show/{id}',[EnderecoEmpresaController::class,'show'])->middleware(['auth'])->name('EnderecoEmpresa.show');

Route::put('/EnderecoEmpresa/update/{id}',[EnderecoEmpresaController::class,'update'])->middleware(['auth'])->name('EnderecoEmpresa.update');

Route::delete('/EnderecoEmpresa/{id}',[EnderecoEmpresaController::class, 'destroy'])->middleware(['auth'])->name('EnderecoEmpresa.delete');

//----------------------------------------------------------------------------------


Route::get('/index/Instrutor',[InstrutorController::class,'index'])->middleware(['auth'])->name('Instrutor.index');

Route::get('/create/Instrutor',[InstrutorController::class,'create'])->middleware(['auth'])->name('Instrutor.create');

Route::post('/create/Instrutor',[InstrutorController::class,'create'])->middleware(['auth'])->name('Instrutor.create');

Route::post('/store/Instrutor',[InstrutorController::class,'store'])->middleware(['auth'])->name('Instrutor.store');

Route::get('/store/Instrutor',[InstrutorController::class,'store'])->middleware(['auth'])->name('Instrutor.store');

Route::get('/Instrutor/show/{id}',[InstrutorController::class,'show'])->middleware(['auth'])->name('Instrutor.show');

Route::put('/Instrutor/update/{id}',[InstrutorController::class,'update'])->middleware(['auth'])->name('Instrutor.update');

Route::delete('/Instrutor/{id}',[InstrutorController::class, 'destroy'])->middleware(['auth'])->name('Instrutor.delete');

Route::post('/Instrutor/edit/{id}',[InstrutorController::class,'edit'])->middleware(['auth'])->name('Instrutor.edit');

Route::get('/Instrutor/edit/{id}',[InstrutorController::class,'edit'])->middleware(['auth'])->name('Instrutor.edit');
//----------------------------------------------------------------------------------

Route::get('/index/contrato',[ContratoController::class,'index'])->middleware(['auth'])->name('contrato.index');

Route::get('/create/contrato',[ContratoController::class,'create'])->middleware(['auth'])->name('contrato.create');

Route::post('/create/contrato',[ContratoController::class,'create'])->middleware(['auth'])->name('contrato.create');

Route::post('/store/contrato',[ContratoController::class,'store'])->middleware(['auth'])->name('contrato.store');

Route::get('/store/contrato',[ContratoController::class,'store'])->middleware(['auth'])->name('contrato1.store');

Route::get('/contrato/show/{id}',[ContratoController::class,'show'])->middleware(['auth'])->name('contrato.show');

Route::put('/contrato/update/{id}',[ContratoController::class,'update'])->middleware(['auth'])->name('contrato.update');

Route::delete('/contrato/{id}',[ContratoController::class, 'destroy'])->middleware(['auth'])->name('contrato.delete');

//----------------------------------------------------------------------------------

Route::get('/index/feriado',[FeriadoController::class,'index'])->middleware(['auth'])->name('feriado.index');

Route::get('/create/feriado',[FeriadoController::class,'create'])->middleware(['auth'])->name('feriado.create');

Route::post('/create/feriado',[FeriadoController::class,'create'])->middleware(['auth'])->name('feriado.create');

Route::post('/store/feriado',[FeriadoController::class,'store'])->middleware(['auth'])->name('feriado.store');

Route::get('/store/feriado',[FeriadoController::class,'store'])->middleware(['auth'])->name('feriado.store');

Route::get('/feriado/show/{id}',[FeriadoController::class,'show'])->middleware(['auth'])->name('feriado.show');

Route::put('/feriado/update/{id}',[FeriadoController::class,'update'])->middleware(['auth'])->name('feriado.update');

Route::delete('/feriado/{id}',[FeriadoController::class, 'destroy'])->middleware(['auth'])->name('feriado.delete');

Route::post('/feriado/edit/{id}',[FeriadoController::class,'edit'])->middleware(['auth'])->name('feriado.edit');

Route::get('/feriado/edit/{id}',[FeriadoController::class,'edit'])->middleware(['auth'])->name('feriado.edit');

//---------------------------------------------------------------------------
Route::get('/index/qtd_dias',[QtdDiasController::class,'index'])->middleware(['auth'])->name('qtd_dias.index');

Route::get('/create/qtd_dias/{id}',[QtdDiasController::class,'create'])->middleware(['auth'])->name('qtd_dias.create');

Route::post('/create/qtd_dias/{id}',[QtdDiasController::class,'create'])->middleware(['auth'])->name('qtd_dias.create');

Route::post('/store/qtd_dias',[QtdDiasController::class,'store'])->middleware(['auth'])->name('qtd_dias.store');

Route::get('/store/qtd_dias',[QtdDiasController::class,'store'])->middleware(['auth'])->name('qtd_dias.store');

Route::get('/qtd_dias/show/{id}',[QtdDiasController::class,'show'])->middleware(['auth'])->name('qtd_dias.show');

Route::put('/qtd_dias/update/{id}',[QtdDiasController::class,'update'])->middleware(['auth'])->name('qtd_dias.update');

Route::delete('/qtd_dias/{id}',[QtdDiasController::class, 'destroy'])->middleware(['auth'])->name('qtd_dias.delete');

Route::post('/qtd_dias/edit/{id}',[QtdDiasController::class,'edit'])->middleware(['auth'])->name('qtd_dias.edit');

Route::get('/qtd_dias/edit/{id}',[QtdDiasController::class,'edit'])->middleware(['auth'])->name('qtd_dias.edit');




require __DIR__.'/auth.php';
