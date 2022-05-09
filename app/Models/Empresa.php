<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\EnderecoEmpresa;
use App\Models\Agendamento_3_dias;
use App\Models\Empresa;
class Empresa extends Model
{
    use HasFactory;
    protected $table = "empresas";
    protected $guarded = [];


     public function enderecoempresa()
    {
        return $this->belongsTo(EnderecoEmpresa::class);
    }
 
    

}
