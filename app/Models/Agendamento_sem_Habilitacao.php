<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Agendamento_sem_Habilitacao extends Model
{
    use HasFactory;
    protected $table ="agendamento_sem__habilitacaos";

    protected $guarded = [];

     public function automovel(){
        return $this->hasOne(Automovel::class, 'automovel_id','id');
     }
}
