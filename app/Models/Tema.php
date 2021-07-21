<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Tema
 *
 * @property $id
 * @property $temas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Tema extends Model
{
    
    protected $primaryKey = 'id';
    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['temas'];



}
