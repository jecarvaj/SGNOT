<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Equipo extends Model
{
    protected $table = 'equipos';
    protected $primaryKey = 'equ_id';
    protected $fillable=['equ_marca', 'equ_descripcion','equ_estado','equ_tipo'];

    public function software()
    {
        return $this->belongsToMany('App\Software','tiene_softwares','soft_id','equ_id');

    }

    public function hardware()
    {
        return $this->belongsTo('App\Hardware', 'hard_id');

    }
}
