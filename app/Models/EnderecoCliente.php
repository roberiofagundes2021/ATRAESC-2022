<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EnderecoCliente extends Model
{
    use HasFactory;
    
    protected $table="endereco__clientes";
    protected $guarded=[];


     public function agendamento_3_dias()
    {
        return $this->belongsTo(Agendamento_3_dias::class,'agendamento_3_dias_id','id');
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class,'empresa_id','id');
    }
}
