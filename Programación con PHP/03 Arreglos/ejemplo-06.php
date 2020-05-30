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
    array("puesto"=>"Gerente", "sueldo"=> 15000),
    array("puesto"=>"Secretaria", "sueldo"=>5000),
    array("puesto"=>"Vigilante", "sueldo"=>4000)
    );

    echo "<table>";
    echo "<caption> <h4>Tabla de sueldos base</h4> </caption>";
    echo "<tr><th>Nombre del puesto</th><th>Sueldo base</th></tr>";
    for($i=0;$i<count($puestos);$i++)
    {
        $nombre = $puestos[$i]['puesto'];
        $sueldo = $puestos[$i]['sueldo'];
        echo "<tr><td> $nombre </td>
                  <td>$sueldo</td>
              </tr>";
    }
    echo "</table>";
 ?>   


</body>
</html>