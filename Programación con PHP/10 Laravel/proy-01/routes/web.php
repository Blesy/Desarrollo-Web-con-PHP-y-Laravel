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

Route::get('/empleados', 'EmpleadosController@index');

Route::get('saludo/{nombre}/{apodo?}', function ($nombre, $apodo = null) {
    if ($apodo) {
        return "Bienvenido {$nombre}, tu apodo es {$apodo}";
    } else {
        return "Bienvenido {$nombre}, no tienes apodo";
    }
});

Route::get('/empleados/detalles/{id}', function ($id) {
    return "Datos del empleado: {$id}";
    });

Route::get('/saludo', function () {
    return '<h2>Hola mundo!!!</h2>';
    });

Route::get('/reporte', function () {
        return '<h1>Reporte de Clientes</h1>';
});

Route::get('/', function () {
    return view('welcome');
});
