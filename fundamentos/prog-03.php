<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
    $a = $_GET['x'];
    $b = $_GET['y'];
    if( $a > $b ){
        echo "<p><strong>a es <em>mayor</em> que b</strong> </p>";
    }
    elseif ( $b > $a ){
        echo "<p><strong>b es <em>mayor</em> que a </strong></p>";
    }
    else {
        echo "<p><strong>a y b son <em>iguales</em> </strong></p>";
    }

    echo "Bye!!!";

?>



</body>
</html>