<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subgrupoelemento extends Model
{
    use HasFactory;
    protected $fillable = ['id','nombresubgrupo', 'codigogrupo','color',];
}
