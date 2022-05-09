<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class Agendamento_3_dias extends Model
{
    use HasFactory;
     protected $table ="agendamento_3_dias";
    protected $guarded =[];

    public function empresa()
    {
         return $this->hasmany(Empresa::class,);
    }

    public function automovel()
    {
        return $this->belongsTo(Automovel::class);
    }

    public function enderecoempresa()
    {
        return $this->belongsTo(EnderecoEmpresa::class);
    }

    public function qtd_dias()
    {
        return $this->belongsTo(Qtd_dias::class);
    }



   

}

  