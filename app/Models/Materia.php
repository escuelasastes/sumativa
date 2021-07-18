<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Materia
 *
 * @property $id
 * @property $nombre
 * @property $competenciaA
 * @property $fuentes
 * @property $unidades_id
 * @property $sisevals_id
 * @property $created_at
 * @property $updated_at
 *
 * @property Siseval $siseval
 * @property Unidade $unidade
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Materia extends Model
{
    
    static $rules = [
		'nombre' => 'required',
		'competenciaA' => 'required',
		'fuentes' => 'required',
		'unidades_id' => 'required',
		'sisevals_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['nombre','competenciaA','fuentes','unidades_id','sisevals_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function siseval()
    {
        return $this->hasOne('App\Models\Siseval', 'id', 'sisevals_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function unidade()
    {
        return $this->hasOne('App\Models\Unidade', 'id', 'unidades_id');
    }
    

}
