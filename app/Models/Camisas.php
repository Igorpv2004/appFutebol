<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Camisas extends Model
{
    use HasFactory;
    protected $fillable = [
        'modelo', 'tamanho', 'marca', 'cor', 'valor'
    ];
}

