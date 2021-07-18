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
    
    static $rules = [
		'prodEsp' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['prodEsp'];



}
