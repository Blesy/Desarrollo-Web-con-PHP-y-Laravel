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

    $tipoCambio = $_GET['precio'];
    $inicio = $_GET['inicio'];
    $fin = $_GET['fin'];
    

    echo "<table class='table'>
    <thead class='thead-dark'>
    <tr>
    <th scope='col'>Dolares</th>
    <th scope='col'>Pesos</th>
  </tr>
</thead>
<caption>Tipo de cambio del $tipoCambio</caption>    
";
    for ($i=$inicio; $i<=$fin; $i++){
        $pesos = $tipoCambio * $i;     
        //echo $num . " x " . $i . " = " . $resultado . "<br/>";
        echo "<tr>
                <td>$i</td>
                <td>$pesos</td>
                <tr>";
    }
    echo "</table>"; 
?>

</body>
</html>