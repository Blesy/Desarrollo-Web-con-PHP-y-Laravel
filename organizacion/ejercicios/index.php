<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include ("datos.php");

echo "<table class='table'>
<thead class='thead-dark'>
<tr>
<th scope='col'>Nombre</th>
<th scope='col'>Población</th>
<th scope='col'>Superficie</th>
</tr>
</thead>
<caption>Municipios de Sinaloa</caption>    
";
for ($i=0; $i<=count($municipios); $i++){
    echo "<tr>
            <td>$municipios[$i]</td>
            <td>$poblacion[$i]</td>
            <td>$superficie[$i]</td>
          <tr>";
}
echo "</table>"; 


?>    


</body>
</html>