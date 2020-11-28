<!DOCTYPE html>
<html lang="en">
<head>

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

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
<th scope='col'>Escudo</th>
<th scope='col'>Nombre</th>
<th scope='col'>Población</th>
<th scope='col'>Superficie</th>
</tr>
</thead>
<caption>Municipios de Sinaloa</caption>    
";
for ($i=0; $i<count($municipios); $i++){
    echo "<tr>
            <td><img src='escudos/$escudos[$i]' width=200 heigth=200   > </td>
            <td>$municipios[$i]</td>
            <td>$poblacion[$i]</td>
            <td>$superficie[$i]</td>
          <tr>";
}
echo "</table>"; 


?>    


</body>
</html>