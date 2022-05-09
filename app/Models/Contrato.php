<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contrato extends Model
{
    use HasFactory;
    protected $table = "contratos";
    protected $guarded = [];

    public function automovel()
    {
        return $this->belongsTo(Automovel::class);
    }

    public function empresa()
    {
        return $this->belongsTo(Empresa::class);
    }

    public function enderecoempresa()
    {
        return $this->belongsTo(EnderecoEmpresa::class);
    }

    public function agendamento_3_dias()
    {
        return $this->belongsTo(Agendamento_3_dias::class);
    }

    public function agendamento_15_dias()
    {
        return $this->belongsTo(Agendamento_15_dias::class);
    }
}
