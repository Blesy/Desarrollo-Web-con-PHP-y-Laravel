<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

include('biblioteca.php');

$val = 10;
echo "Valor original = " . $val . "<br/>";
incrementar ($val, 2);
echo "Valor modificado = " . $val . "<br/>";

    $a=$_GET['a'];
    $b=$_GET['b'];
    
    $c = 10;
    $d = 11;

    $result = sumar($a, $b);
    echo "<p>La es suma es: $result</p>";

    $result = sumar($c, $d);
    echo "<p>La es suma es: $result</p>";

    $result = sumar(49, 59);
    echo "<p>La es suma es: $result</p>";

    $datos= array(1,2,3,4,5,6,7,8,9,10);
    $resultado=suma_vector($datos);
    echo "<p>La es suma es: $resultado</p>";

    $ops=array("Google"=>"http://www.google.com",
                "Facebook"=>"http://www.facebook.com",
                "UAS"=>"http://www.uas.edu.mx",
                "FIC"=>"http://fic.uas.edu.mx",
                "Mi pagina"=>"http://localhost");

    menuVertical($ops);


    $x = sumatoria(1,2,3,4,5);
    echo "<p>La es suma es: $x</p>";


    $y = sumatoria (6,7,8,9,10,11,12,13,14,15);

    echo "<p>La es suma es: $y</p>";

?>


</body>
</html>