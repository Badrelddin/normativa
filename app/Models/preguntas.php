<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class preguntas extends Model
{
    use HasFactory;

    protected $table = 'preguntas';
    protected $fillable = ['id','titulo', 'descripcion', 'respuesta'];

}
