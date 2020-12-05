<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST['pwd01']) and !empty($_POST['pwd01'])){
        $pwd01 = $_POST['pwd01'];
   
    if (isset($_POST['pwd02']) and !empty($_POST['pwd02'])){
        $pwd02 = $_POST['pwd02'];
    
    if ($pwd01==$pwd02)
        echo "Contraseñas correctas";
    else
        echo "Contraseñas no son iguales";
    }
    else
        echo "No confirmo la contraseña";
    }
    else
        echo "No escribio la contraseña";
?>


</body>
</html>