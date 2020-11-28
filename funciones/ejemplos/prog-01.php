<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    function sumar($num1, $num2)
    {
       return $num1 + $num2;
    }


    function suma_vector($números) {
        $total = 0;
        foreach ($números as $num) {
        $total += $num;
        }
        return $total;
    }

    function menuVertical($opciones){
        echo"<ul>";
        while(list($opcion,$enlace)=each($opciones))
        echo "<li><a href='$enlace'>$opcion</a></li>";
        echo "</ul>";
    }



?>

<?php

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





    

?>


</body>
</html>