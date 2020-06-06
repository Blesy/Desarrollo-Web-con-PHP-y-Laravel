<?php 

    $puestos = array(
                array("descripcion"=>"Supervisor", "sueldo"=>10000),
                array("descripcion"=>"Secretaria", "sueldo"=>4000),
                array("descripcion"=>"Jefe de turno", "sueldo"=>12000),
                array("descripcion"=>"Tecnico A", "sueldo"=>8000),
                array("descripcion"=>"Tecnico B", "sueldo"=>8500),
                array("descripcion"=>"Tecnico c", "sueldo"=>9000)    
        ); 

    $turnos = array( 
            array("desc"=>"Matutino", "inc"=>0),
            array("desc"=>"Vespertino", "inc"=>5),
            array("desc"=>"Nocturno", "inc"=>10),
            array("desc"=>"Mixto", "inc"=>0)

        );


    $estadoCivil = array( 
        array("desc"=>"Casado", "id"=>'C'),
        array("desc"=>"Soltero", "id"=>'S'),
        array("desc"=>"Divorciado", "id"=>'D')
    );    

?>