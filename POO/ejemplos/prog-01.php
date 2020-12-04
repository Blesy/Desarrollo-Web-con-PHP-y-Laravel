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
        $rect =new Rectangulo();
        $rect->altura = 10;
        $rect->base = 5;
        echo "Area : " . $rect->CalcularArea() . "<br/>";
        echo "Perimetro: " . $rect->CalcularPerimetro();

    ?>


</body>
</html>