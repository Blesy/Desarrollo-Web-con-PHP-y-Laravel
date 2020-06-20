<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/empleados","EmpleadosController@index");
Route::get("/empleados/crear","EmpleadosController@crear");
Route::post("/empleados/guardar","EmpleadosController@guardar");
Route::get("/empleados/detalle/{id}","EmpleadosController@detalle");
Route::get("/empleados/editar/{id}","EmpleadosController@editar");
Route::post("/empleados/actualizar/{id}","EmpleadosController@actualizar");
Route::get("/empleados/eliminarConfirmar/{id}","EmpleadosController@eliminarConfirmar");
Route::get("/empleados/eliminar/{id}","EmpleadosController@eliminar");


Route::get('/', function () {
    return view('index');
});
