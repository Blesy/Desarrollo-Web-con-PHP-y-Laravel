<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
 <?php 
 
 $puestos = array(
    array("Gerente", 15000),
    array("Secretaria", 5000),
    array("Vigilante", 4000)
    );

    echo "<table>";
    echo "<caption> <h3>Tabla de sueldos base</h3> </caption>";
    echo "<tr><th>Nombre del puesto</th><th>Sueldo base</th></tr>";
    for($i=0;$i<count($puestos);$i++)
    {
        $nombre = $puestos[$i][0];
        $sueldo = $puestos[$i][1];
        echo "<tr><td> $nombre </td>
                  <td>$sueldo</td>
              </tr>";
    }
    echo "</table>";
 ?>   


</body>
</html>