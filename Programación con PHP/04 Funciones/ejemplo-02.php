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
$cad="Hola";
echo "Longitud:" . strlen($cad);
echo "<br>---------------------------------<br>";
    $hoy = date("F j, Y, g:i a"); // March 10, 2001, 5:16 pm
    echo $hoy . "<br/>";
    $hoy = date("m.d.y"); // 03.10.01
    echo $hoy . "<br/>";
    $hoy = date("j, n, Y"); // 10, 3, 2001
    echo $hoy . "<br/>";
    $hoy = date("Ymd");
    echo $hoy . "<br/>";
     // 20010310
    $hoy = date('\i\t \i\s \t\h\e jS \d\a\y.'); // it is the 10th day.
    echo $hoy . "<br/>";
    
    $hoy = date("D M j G:i:s T Y");
    echo $hoy . "<br/>";
    
    // Sat Mar 10 17:16:18 MST 2001
    $hoy = date('H:m:s \m \i\s\ \m\o\n\t\h');
    echo $hoy . "<br/>";
    
    $hoy = date("H:i:s");
    echo $hoy . "<br/>";
    
    $hoy = date("Y-m-d H:i:s");
    echo $hoy . "<br/>";
    
    // 17:03:18 m is month
    // 17:16:18
    // 2001-03-10 17:16:18 (el formato DATETIME de MySQL)    

echo "<br>---------------------------------<br>";

 ?>       



</body>
</html>