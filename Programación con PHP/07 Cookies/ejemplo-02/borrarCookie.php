<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php  
        unset($_COOKIE['miNombre']);
        setcookie("miNombre","", time() - 1);
    
        unset($_COOKIE['miColor']);
        setcookie("miColor","", time() - 1);
    
        unset($_COOKIE['miColorFondo']);
        setcookie("miColorFondo","", time() - 1);
    
       //Se redirige a pagina personal
      header ("Location: index.php");
    ?>


</body>
</html>

