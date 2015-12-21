<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Software extends Model
{
    protected $table = 'softwares';
    protected $primaryKey = 'soft_id';

    public function equipo()
    {
        return $this->belongsToMany('App\Equipo','equ_id');
    }
}