<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
 <?php
echo "<br>---------------------------------<br>";
    $cad = "Hola a todos";
    $lista = explode(" ", $cad);
    for ($i=0; $i<count($lista); $i++)
        echo $i . " - " . $lista[$i] . "<br/>";
echo "<br>---------------------------------<br>";
    $cad = "Hola!!!!!";
    $resultado = rtrim($cad, "!");
    echo $resultado;
echo "<br>---------------------------------<br>";
    $cad = "Hola!!!!";
    $result = strstr($cad, "la");
    echo $result;
echo "<br>---------------------------------<br>";
    $cad = "Hola!!!!";
    $min = strtolower($cad);
    $may = strtoupper($cad);
    echo $min . "<br/>";
    echo $may . "<br/>";
echo "<br>---------------------------------<br>";
    $cad1="Hola";
    $cad2="hola";
    if (strcasecmp($cad1, $cad2)==0)
        echo "Son iguales <br/>";
    else
        echo "No son iguales <br/>";
        
    if (strcmp($cad1, $cad2)==0)
        echo "Son iguales <br/>";
    else
        echo "No son iguales <br/>";
echo "<br>---------------------------------<br>";


 ?>       



</body>
</html>