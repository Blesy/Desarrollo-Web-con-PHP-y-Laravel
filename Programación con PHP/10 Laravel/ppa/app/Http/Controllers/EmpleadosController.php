<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmpleadosController extends Controller
{
    function index(){

        return view("empleados/index");
    }
    //
}
