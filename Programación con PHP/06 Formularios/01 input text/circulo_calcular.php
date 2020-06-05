<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if(isset($_GET['radio'])){
        if(empty($_GET['radio'])==false){
            if(is_numeric($_GET['radio'])){
                $radio = $_GET['radio'];
                $area = 3.1416 * pow($radio,2);
                $perimetro = 2*3.1416*$radio;
                echo "Area: $area <br/>";
                echo "Perimetro: $perimetro";
                
            }else
                echo "Debe escribir números";
        }else
            echo "El radio es cero o vacío";
    } else
        echo "no existe el radio";
?>
    
</body>
</html>