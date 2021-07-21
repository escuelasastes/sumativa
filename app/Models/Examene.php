<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Examene extends Model
{
    
    protected $primaryKey = "id";
    protected $fillable = ['evaluacion','reveval','entrSE'];

}
