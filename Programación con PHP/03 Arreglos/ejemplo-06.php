<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style='width:800px' >
 <h1 class="display-4">Puestos</h1>   
 
 
 <?php 
 
  $puestos = array(
    array("puesto"=>"Gerente", "sueldo"=> 15000),
    array("puesto"=>"Secretaria", "sueldo"=>5000),
    array("puesto"=>"Vigilante", "sueldo"=>4000)
    );

    echo "<table class='table table-sm table-bordered table-hover'>";
    echo "<caption> Tabla de sueldos base</caption>";
    echo "<thead class='thead-dark'>";
    echo "<tr>
            <th>Nombre</th>
            <th>Sueldo base</th>
          </tr>";
    echo "<thead>
        <tbody>";

    for($i=0;$i<count($puestos);$i++)
    {
        $nombre = $puestos[$i]['puesto'];
        $sueldo = $puestos[$i]['sueldo'];
        echo "<tr><td> $nombre </td>
                  <td>$sueldo</td>
              </tr>";
    }



    echo "</tbody>
        </table>";
 ?>   


</body>
</html>