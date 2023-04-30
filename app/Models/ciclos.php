<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ciclos extends Model
{
    use HasFactory;

    protected $table = 'ciclos';
    protected $fillable = ['id','nombre','descripcion'];
}
