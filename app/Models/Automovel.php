<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovel extends Model
{
    use HasFactory;
    protected $table ="automovels";

    protected $guarded =[];

    public function Agendamento_sem_habilitcao(){
        return $this->belongsTo(Agendamento_sem_habilitcao::class, 'Agendamento_sem_habilitacao_id','id');
    }

      public function Agendamento_com_habilitcao(){
        return $this->belongsTo(Agendamento_com_habilitcao::class, 'Agendamento_com_habilitacao_id','id');
    }
}
