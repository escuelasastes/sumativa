<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Examene
 *
 * @property $id
 * @property $evaluacion
 * @property $reveval
 * @property $entrSE
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Examene extends Model
{
    
    static $rules = [
		'evaluacion' => 'required',
		'reveval' => 'required',
		'entrSE' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['evaluacion','reveval','entrSE'];



}
