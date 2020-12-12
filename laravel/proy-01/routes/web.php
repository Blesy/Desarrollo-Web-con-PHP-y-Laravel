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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludo/{nombre}', function ($nombre) {
    return "Hola {$nombre}" ;
    });

Route::get('/saludo2', function () {
        return 'Hola mundo 2!!!';
});    

Route::get('/empleados/detalles/{id}', function ($id) {
    return "Datos del empleado: {$id}";
    });

    Route::get('saludo/{nombre}/{apodo?}', function ($nombre, $apodo = null) {
    if ($apodo) {
    return "Bienvenido {$nombre}, tu apodo es {$apodo}";
    } else {
    return "Bienvenido {$nombre}, no tienes apodo";
    }
    });

    Route::get('/empleados', 'EmpleadosController@index');

