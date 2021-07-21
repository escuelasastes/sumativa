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
    
    protected $primaryKey = 'id';

    protected $fillable = ['numUnidad','competEspTema','nomunidad','temas_id','subtemas_id','estrat_ins_id','prodespers_id','sisevals_id','examenes_id','planpros_id'];

}
