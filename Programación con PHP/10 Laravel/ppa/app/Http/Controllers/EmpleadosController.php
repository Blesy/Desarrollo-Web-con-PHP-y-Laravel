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

    function detalle($id){
        $empleados = DB::select('select * from empleados where id=' . $id);
        return view("empleados/detalle",['empleado'=>$empleados[0]]);
    }

    function editar($id){
        $empleados = DB::select('select * from empleados where id=' . $id);
        return view("empleados/editar",['empleado'=>$empleados[0]]);
    }


    function crear(){

        return view("empleados/crear");
    }

    function guardar(Request $request){
      try{
        // Tomamos los datos del formulario nuevo
        $nombre = $request->input('nombre');
        $genero = $request->input('genero');
        $RFC = $request->input('RFC');
        $fechaNacimiento = $request->input('fechaNacimiento');
        $fechaContrato = $request->input('fechaContrato');
        $correo = $request->input('correo');
        $direccion = $request->input('direccion');
        $archivoSubido = $request->file('foto');
        
        $nombreUnico = substr(md5(time()),0,16);
        $nombreOriginal = $archivoSubido->getClientOriginalName();
        $nombreFinal = $nombreUnico . "-" . $nombreOriginal;
        $fotografia=$archivoSubido->storeAs('fotografias', $nombreFinal);
           
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

    function actualizar(Request $request, $id){
        try{
          // Tomamos los datos del formulario nuevo
          $nombre = $request->input('nombre');
          $genero = $request->input('genero');
          $RFC = $request->input('RFC');
          $fechaNacimiento = $request->input('fechaNacimiento');
          $fechaContrato = $request->input('fechaContrato');
          $correo = $request->input('correo');
          $direccion = $request->input('direccion');
          $archivoSubido = $request->file('foto');
          
          $nombreUnico = substr(md5(time()),0,16);
          $nombreOriginal = $archivoSubido->getClientOriginalName();
          $nombreFinal = $nombreUnico . "-" . $nombreOriginal;
          $fotografia=$archivoSubido->storeAs('fotografias', $nombreFinal);
             
          DB::update (
            'UPDATE empleados SET 
                nombre=?,
                genero=?,
                RFC=?,
                fechaNacimiento=?,
                fechaContrato=?,
                correo=?,
                direccion=?, 
                fotografia=?
                WHERE id=?',
                [
                  $nombre,
                  $genero,
                  $RFC,
                  $fechaNacimiento,
                  $fechaContrato,
                  $correo,
                  $direccion,
                  $fotografia,
                  $id  
                ]);

                 return view ("mensaje", ['texto'=>'Registro actualizado satisfactoriamente']); 
      }
      catch(Exception $e){
          return view ("mensaje", ['texto'=>'Error: '.$e->getMessage() ]); 
  
      }
  
  
      }
  
  


    
    //
}




