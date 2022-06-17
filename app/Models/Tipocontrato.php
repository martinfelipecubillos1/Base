<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tipocontrato extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'numero','proveedor','dependencia','tipodecontrato','formadepago','lugarentrega','plazoentrega','otrascondiciones'];
}
