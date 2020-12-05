<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include("config.php");
ini_set('display_errors', 1);
error_reporting(E_ALL);
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT ); 

try{

    // Establece la conexion el servidor
    $conexion = new mysqli($servidor,$usuario,$contraseña,$basededatos);
    // Crea consulta preparada
    $consultaSQL = "SELECT Codigo, Nombre, Fecha, Sueldo FROM Empleados";
    $comandoSQL = $conexion->prepare($consultaSQL);
    // Ejecuta consulta
    $comandoSQL->execute();
    // Establece las variables para obtener los datos
    $comandoSQL->bind_result($codigo, $nombre, $fecha, $saldo);

    echo "<table>";
    echo "<caption>Reporte de Empleados</caption>";

    while ($comandoSQL->fetch()==true){
        echo "<tr>";
        echo "<td> $codigo </td>";
        echo "<td> $nombre </td>";
        echo "<td> $fecha </td>";
        echo "<td> $saldo </td>";
        echo "</tr>";
        }
   
    echo "</table>";
  
}
catch(Exception $e){
    echo $e->getMessage();
}
?>




</body>
</html>