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
    
    static $rules = [
		'materias_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['materias_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function materia()
    {
        return $this->hasOne('App\Models\Materia', 'id', 'materias_id');
    }
    

}
