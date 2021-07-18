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
    
    static $rules = [
		'temas' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['temas'];



}
