<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Elementoinventario extends Model
{
    use HasFactory;

    protected $fillable = ['id','elemento','marca', 'referencia','unidad','placainterna','placaexterna',];

}
