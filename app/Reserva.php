<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
    protected $table = 'reservas';
    protected $primaryKey = 're_id';

    protected $fillable = ['re_id','equ_id', 'alu_rut',
    						're_fecha_solicitud',
    						're_fecha_retiro','re_fecha_devolucion',
    						're_fecha_real_devolucion'] ;
}

