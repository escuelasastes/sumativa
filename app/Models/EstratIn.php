<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class EstratIn
 *
 * @property $id
 * @property $estrategia
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class EstratIn extends Model
{
    
    static $rules = [
		'estrategia' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['estrategia'];



}
