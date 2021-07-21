<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Subtema
 *
 * @property $id
 * @property $subtemas
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Subtema extends Model
{
    
    protected $primaryKey = "id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['subtemas'];



}
