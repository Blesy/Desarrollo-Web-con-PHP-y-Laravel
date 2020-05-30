<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    include ("rectangulo.php");
    $rect = new Rectangulo(10,20);
    //$rect->altura = 10;
    //$rect->base = 5;
    //$rect->CambiarAltura(66);
    //$rect->CambiarBase(77);
    echo "Area : " . $rect->CalcularArea() . "<br/>";
    echo "Perimetro: " . $rect->CalcularPerimetro();
?>    



</body>
</html>