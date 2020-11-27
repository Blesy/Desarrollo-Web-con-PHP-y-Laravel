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

        echo "<em>Los lados $l1, $l2 y $l3 correnponden a un:</em> " ;   

        if ($l1==$l2 && $l2==$l3)
            echo "<h3>Triangulo Equilatero!!!</h3>";
        elseif($l1==$l2 || $l2==$l3 || $l3==$l1 )
            echo "<h3>Triangulo Isosceles!!!</h3>";
        else
            echo "<h3>Triangulo Escaleno!!!<h3>";    
               
        
    ?>
</body>
</html>