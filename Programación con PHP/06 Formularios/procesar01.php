<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $nombre = $_GET['nombre'];
    $fecha = $_GET['fecha'];
    echo "Su Nombre es: $nombre<br/>";
    echo "Fecha : $fecha <br/>";
    $hoy = new DateTime();
    $fecha = new DateTime($fecha);
    $edad = $hoy->diff($fecha);
    echo "Años: $edad->y <br/>";
    echo "Meses: $edad->m <br/>";
    echo "dias: $edad->d <br/>";

?>



</body>
</html>