<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planeacione
 *
 * @property $id
 * @property $materias_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Materia $materia
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planeacione extends Model
{
  
    protected $primaryKey = "id";
    protected $fillable = ['materias_id'];
    
}
