<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php include "configuracion.php"; ?>
<?php 
    
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];

    $fechaNacimiento = new DateTime($fecha);
    $hoy = new DateTime();

    $diferencia = $hoy->diff($fechaNacimiento);

    $aa = $diferencia->y;
    $mm = $diferencia->m;
    $dd = $diferencia->d;
    
    $idPuesto = $_POST['puestos'];
    $puesto = $puestos[$idPuesto]['descripcion'];
    $idTurno = $_POST['turnos'];
    $turno = $turnos[$idTurno]['desc'];
    $genero = $_POST['genero'];
    $descGenero = ($genero=='F'?'Femenino':'Masculino');
    $idEstadoCivil = $_POST['estado'];
    $estado = $estadoCivil[$idEstadoCivil]['desc']; 
    $estudia = (isset($_POST['estudia'])?'Si':'No');

    $salarioBase = $puestos[$idPuesto]['sueldo'];
    $incremento = $turno[$idTurno]['inc'];
    $increntoTurno = $salarioBase * $incremento/100;
    
    if ($genero=='F' and $estado=='Casado')
            $incrementoBeca = $salarioBase*0.01*$numHijos;
    else
        $incrementoBeca = 0;

    if ($estudia=='Si')
        $incrementoEstudia = 0.02 * $salarioBase;
    else
        $incrementoEstudia = 0;        

    $total = $sueldoBase + $incrementoTurno +  
             $incrementoBeca + $incrementoEstudia;

    echo "Nombre      : $nombre <br/>";
    echo "Fecha       : $fecha <br/> ";
    echo "Edad        : $aa años con $mm mes y $dd dias<br>";
    echo "Puesto      : $puesto<br/>";
    echo "Turno       : $turno <br/>";
    echo "Genero      : $descGenero <br/>";
    echo "Estado Civil: $estado<br/>";
    echo "Estudia     : $estudia <br/>";
    echo "Ingreso Total: $total<br>";


    
    
?>


</body>
</html>