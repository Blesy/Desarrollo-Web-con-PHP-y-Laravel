<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
        include ("rectangulo2.php");
        $rect =new Rectangulo($_GET['a'],$_GET['b']);
        // $rect->CambiarAltura($_GET['a']);
        // $rect->CambiarBase($_GET['b']);
        echo "Area : " . $rect->CalcularArea() . "<br/>";
        echo "Perimetro: " . $rect->CalcularPerimetro()."<br/>";

    ?>


</body>
</html>