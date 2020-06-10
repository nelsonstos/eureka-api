<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Empleado extends Model 
{

    protected $table = 'empleados';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombre', 'apellidos', 'fecha_nacimiento', 'fecha_ingreso', 'afp', 'cargo', 'sueldo'
    ];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = [
        
    ];

}
