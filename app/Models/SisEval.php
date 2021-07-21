<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Siseval
 *
 * @property $id
 * @property $ejes
 * @property $competencias
 * @property $criterios
 * @property $ponderaciones
 * @property $total
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Siseval extends Model
{
    
    protected $primaryKey = "id";
    protected $fillable = ['ejes','competencias','criterios','ponderaciones','total'];



}
