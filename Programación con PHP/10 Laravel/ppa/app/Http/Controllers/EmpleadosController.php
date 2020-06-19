<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    function index(){

        $empleados = DB::select('select * from empleados');
        return view("empleados/index",['empleados'=>$empleados]);

    }

    function crear(){

        return view("empleados/crear");
    }

    function guardar(Request $resquest){
      try{
        // Tomamos los datos del formulario nuevo
        $nombre = $resquest->input('nombre');
        $genero = $resquest->input('genero');
        $RFC = $resquest->input('RFC');
        $fechaNacimiento = $resquest->input('fechaNacimiento');
        $fechaContrato = $resquest->input('fechaContrato');
        $correo = $resquest->input('correo');
        $direccion = $resquest->input('direccion');
        $fotografia ="mifoto";     
        $empleado = array('nombre'=>$nombre,
                     'genero'=>$genero,
                     'RFC'=>$RFC,
                     'fechaNacimiento'=>$fechaNacimiento,
                     'fechaContrato'=>$fechaContrato,
                     'correo'=>$correo,
                     'direccion'=>$direccion, 
                     'fotografia'=>$fotografia   
                 );

        DB::table('empleados')->insert($empleado);

        return view ("mensaje", ['texto'=>'Registro creado satisfactoriamente']); 
    }
    catch(Exception $e){
        return view ("mensaje", ['texto'=>'Error: '.$e->getMessage() ]); 

    }


    }


    //
}
