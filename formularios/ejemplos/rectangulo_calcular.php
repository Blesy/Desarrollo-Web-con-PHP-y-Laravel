<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
include ("../../poo/ejemplos/rectangulo2.php");
$rect = new Rectangulo($_GET['base'], $_GET['altura']);
echo "Area : " . $rect->CalcularArea() . "<br/>";
echo "Perimetro: " . $rect->CalcularPerimetro();
?>


</body>
</html>