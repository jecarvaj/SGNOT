<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hardware extends Model
{
    protected $table = 'hardwares';
    protected $primaryKey = 'hard_id';
    protected $fillable= ['hard_ram','hard_procesador','hard_disco',
        'hard_video'];

    public function equipo()
    {

        return $this->hasOne('App\Equipo','equ_id');
    }
}