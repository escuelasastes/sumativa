<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Unidade
 *
 * @property $id
 * @property $numUnidad
 * @property $competEspTema
 * @property $nomunidad
 * @property $temas_id
 * @property $subtemas_id
 * @property $estrat_ins_id
 * @property $prodespers_id
 * @property $sisevals_id
 * @property $examenes_id
 * @property $planpros_id
 * @property $created_at
 * @property $updated_at
 *
 * @property EstratIn $estratIn
 * @property Examene $examene
 * @property Planpro $planpro
 * @property Prodesper $prodesper
 * @property Siseval $siseval
 * @property Subtema $subtema
 * @property Tema $tema
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Unidade extends Model
{
    
    static $rules = [
		'numUnidad' => 'required',
		'competEspTema' => 'required',
		'nomunidad' => 'required',
		'temas_id' => 'required',
		'subtemas_id' => 'required',
		'estrat_ins_id' => 'required',
		'prodespers_id' => 'required',
		'sisevals_id' => 'required',
		'examenes_id' => 'required',
		'planpros_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['numUnidad','competEspTema','nomunidad','temas_id','subtemas_id','estrat_ins_id','prodespers_id','sisevals_id','examenes_id','planpros_id'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function estratIn()
    {
        return $this->hasOne('App\Models\EstratIn', 'id', 'estrat_ins_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function examene()
    {
        return $this->hasOne('App\Models\Examene', 'id', 'examenes_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function planpro()
    {
        return $this->hasOne('App\Models\Planpro', 'id', 'planpros_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function prodesper()
    {
        return $this->hasOne('App\Models\Prodesper', 'id', 'prodespers_id');
    }
    
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
    public function subtema()
    {
        return $this->hasOne('App\Models\Subtema', 'id', 'subtemas_id');
    }
    
    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function tema()
    {
        return $this->hasOne('App\Models\Tema', 'id', 'temas_id');
    }
    

}
