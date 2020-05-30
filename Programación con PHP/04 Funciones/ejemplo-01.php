<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php 
    // Funcion que suma 2 numeros pasados como paramentro 
    function sumar($num1, $num2){
      $r = $num1 + $num2;
      return $r;
    }
?>
    
<?php 

    $result = sumar(4, 5);

    echo "La suma es: " . $result;
    
?>
    
</body>
</html>