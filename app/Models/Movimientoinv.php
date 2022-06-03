<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Movimientoinv extends Model
{
    use HasFactory;


    protected $fillable = [
        'id',
        'responsable',
        'elemento',
        'estado',
        'proveedor',
        'tipomovimiento',
        'usuario',
        'actualiza',];
}

