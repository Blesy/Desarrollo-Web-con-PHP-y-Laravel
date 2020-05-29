<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $a = 15;
    $b = 15;
    if( $a > $b ) {
        echo "<h2>a es mayor que b</h2>";
    }
    elseif ( $b > $a ){
        echo "<h2>b es mayor que a</h2>";
    }
    else {
    echo "<h2>a y b son iguales</h2>";
    }
?>


    
</body>
</html>