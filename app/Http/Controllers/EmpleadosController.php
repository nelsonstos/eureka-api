<?php
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Empleado;
 
class EmpleadosController extends Controller
{
    
    public function index()
    {
        //
        $empleados = Empleado::get();
        return $empleados;
    }
 
    public function store(Request $request)
    {
        dd($request->all());
        $this->validate($request,[ 'nombre'=>'required', 'apellidos'=>'required', 'fecha_nacimiento'=>'required', 'fecha_ingreso'=>'required', 'afp'=>'required', 'cargo'=>'required', 'sueldo'=>'required']);
        return Empleado::create($request->all());
       
    }
 
    public function show($id)
    {
        $empleado = Empleado::find($id);
        return $empleado;
    }
 

    public function update(Request $request, $id)    {
        //
        $this->validate($request,[ 'nombre'=>'required', 'apellido'=>'required', 'fecha_nacimiento'=>'required', 'fecha_ingreso'=>'required', 'afp'=>'required', 'cargo'=>'required', 'sueldo'=>'required']);
 
       return  Empleado::find($id)->update($request->all());
 
    }
 
    public function destroy($id)
    {
        //
        return Empleado::find($id)->delete();
    }
}