<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Empresa;

class EnderecoEmpresa extends Model
{

   use HasFactory;
    protected $table = "endereco_empresas";
    protected $guarded = [];
 
    public function empresa()
    {
        return $this->hasMany(EnderecoEmpresa::class);
    }

   

}
