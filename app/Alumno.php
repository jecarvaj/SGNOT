<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alumno extends Model
{
    protected $table = 'alumnos';
    protected $primaryKey = 'alu_rut';

    protected $fillable = ['alu_rut','alu_nombres','alu_paterno',
    						'alu_materno','alu_direccion','alu_fono',
    						'alu_carrera','alu_correo','alu_estado'];
}