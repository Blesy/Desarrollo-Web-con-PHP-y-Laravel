<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmpleados extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("nombre",50);
            $table->string("RFC",25);
            $table->string("genero",1);
            $table->date("fechaNacimiento");
            $table->date("fechaContrato");
            $table->string("correo", 45);
            $table->string("direccion", 200);
            $table->string("fotografia");
        });


        
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('empleados');
    }
}
