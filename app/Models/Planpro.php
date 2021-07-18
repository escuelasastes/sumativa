<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Planpro
 *
 * @property $id
 * @property $noPr
 * @property $competencia
 * @property $ponderacion
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Planpro extends Model
{
    
    static $rules = [
		'noPr' => 'required',
		'competencia' => 'required',
		'ponderacion' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['noPr','competencia','ponderacion'];



}
