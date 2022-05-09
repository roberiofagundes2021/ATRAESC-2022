<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContatoCliente extends Model
{
    use HasFactory;
    protected $table = "contato__clientes";
    protected $guarded =[];
}
