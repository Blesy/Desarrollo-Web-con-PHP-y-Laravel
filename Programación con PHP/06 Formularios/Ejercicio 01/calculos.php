<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
    
    $nombre = $_POST['nombre'];
    $fecha = $_POST['fecha'];
    $idPuesto = $_POST['puestos'];
    $idTurno = $_POST['turnos'];
    $genero = $_POST['genero'];
    $idEstadoCivil = $_POST['estado'];
    $estudia = (isset($_POST['estudia'])?'Si':'No');

    echo "Nombre      : $ombre <br/>";
    echo "Fecha       : $fecha <br/> ";
    echo "Puesto      : $idPuesto <br/>";
    echo "Turno       : $idTurno <br/>";
    echo "Genero      : $genero <br/>";
    echo "Estado Civil: $idEstadoCivil<br/>";
    echo "Estudia     : $estudia <br/>";
    
    
?>


</body>
</html>