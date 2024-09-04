<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    use HasFactory;

    // Se a tabela tiver um nome diferente, defina-o aqui
    protected $table = 'users';

    // Se a tabela não tiver timestamps
    public $timestamps = false;
}
