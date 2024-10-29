<?php

namespace App\Models;

use Illuminate\Database\Eloquent\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'products';
    protected $fillable = [
        'nome',
        'email',
        'cpf',
        'perfil',
        'data_cadastro',
        'endereco'
    ];


}
