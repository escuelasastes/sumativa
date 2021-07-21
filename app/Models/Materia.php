<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Materia extends Model
{
    protected $primaryKey = "id";
    protected $fillable = ['nombre','competenciaA','fuentes','unidades_id','sisevals_id'];

}
