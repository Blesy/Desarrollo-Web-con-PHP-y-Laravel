<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $l1 = $_GET['l1'];
        $l2 = $_GET['l2'];
        $l3 = $_GET['l3'];

        if ($l1==$l2 && $l2==$l3)
            echo "Triangulo Equilatero!!!";
        elseif($l1==$l2 || $l2==$l3 || $l3==$l1 )
            echo "Triangulo Isosceles!!!";
        else
            echo "Triangulo Escaleno!!!";    
               
        
    ?>
</body>
</html>