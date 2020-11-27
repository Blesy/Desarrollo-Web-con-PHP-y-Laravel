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
    if( $a > $b ) {
        echo "a mayor que b <br/>";
    }
    else{
        echo "b es mayor que a <br/>";
    }
    echo "Bye!!!";
?>



</body>
</html>