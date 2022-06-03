<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class responsablespordependencia extends Model
{
    use HasFactory;

    protected $table ='responsablespordependencias';

    protected $fillable = ['id','responsable', 'dependencia'];
}
