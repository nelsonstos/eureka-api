<?php

use Illuminate\Database\Seeder;
use App\Empleado;
use Carbon\Carbon;

class EmpleadoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $empleados = [
            [
                'nombre' => 'Magaly ',
                'apellidos' => 'Gonzales',
                'fecha_nacimiento' =>  Carbon::createFromFormat('Y-m-d', '1990-05-10')->toDateTimeString(),
                'fecha_ingreso' =>  Carbon::createFromFormat('Y-m-d', '2020-04-25')->toDateTimeString(),
                'afp' => 121212,
                'cargo' => "Psicóloga",
                'sueldo' => 3000
            ],
          [
                'nombre' => 'Juan ',
                'apellidos' => 'Torres de la vega',
                'fecha_nacimiento' =>  Carbon::createFromFormat('Y-m-d', '1995-07-01'),
                'fecha_ingreso' =>  Carbon::createFromFormat('Y-m-d', '2019-01-23'),
                'afp' => 121212,
                'cargo' => "Administrador",
                'sueldo' => 4500
            ],
            [
                'nombre' => 'Sara ',
                'apellidos' => 'Palomino',
                 'fecha_nacimiento' =>  Carbon::createFromFormat('Y-m-d', '1997-05-20'),
                'fecha_ingreso' =>  Carbon::createFromFormat('Y-m-d', '2017-09-12'),
                'afp' => 121212,
                'cargo' => "Asistente",
                'sueldo' => 2000
            ],
            [
                'nombre' => 'Robert ',
                'apellidos' => 'Spark',
                'fecha_nacimiento' =>  Carbon::createFromFormat('Y-m-d', '2000-08-10'),
                'fecha_ingreso' =>  Carbon::createFromFormat('Y-m-d', '2019-04-21'),
                'afp' => 121212,
                'cargo' => "Jefe de Maketing",
                'sueldo' => 4500
            ],
        ];
        
        foreach ($empleados as $empleado) {
            Empleado::create($empleado);
        }
    }
}
