<?php

namespace App\Http\Controllers;
use DB;
use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    function index(){

        return view("empleados/index");
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

        $empleado = array('nombre'=>$nombre,
                     'genero'=>$genero,
                     'RFC'=>$RFC,
                     'fechaNacimiento'=>$fechaNacimiento,
                     'fechaContrato'=>$fechaContrato,
                     'correo'=>$correo,
                     'direccion'=>$direccion    
                 );

        DB::table('empleados')->insert($empleado);
        echo "Registro creado satisfactoriamente"; 
    }
    catch(Exception $e){
        echo "Error: " . $e->getMessage();
    }


    }


    //
}
