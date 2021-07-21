<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Prodesper
 *
 * @property $id
 * @property $prodEsp
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Prodesper extends Model
{
    
    protected $primaryKey = "id";

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prodEsp'];



}
