<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    $sexo = $_GET['sexo'];
    echo "Su Nombre es: $nombre <br/>";
    echo "Su Edad es : $edad <br/>";
    if ($sexo == 'm')
     $desc = "Femenino";
    else
        $desc = "Masculino"; 
        
    echo "Sexo: " . $desc ;

    if (isset($_GET['ocupaciones'])){
        $ocupaciones= $_GET['ocupaciones'];

        for ($i=0;$i<count($ocupaciones); $i++)
        echo "<p>Ocupación " .  ($i+1) . ": $ocupaciones[$i] </p>";
        
        }
        else
        echo "<p>Debe seleccionar al menos una ocupación</p>";

        if (isset($_GET['pwd01']) and !empty($_GET['pwd01'])){
            $pwd01 = $_GET['pwd01'];
            if (isset($_GET['pwd02']) and !empty($_GET['pwd02'])){
            $pwd02 = $_GET['pwd02'];
            if ($pwd01==$pwd02)
            echo "<p>Contraseñas correctas</p>";
            else
            echo "<p>Contraseñas no son iguales</p>";
            
            }
            else
            echo "<p>No confirmo la contraseña</p>";
            }
            else
            echo "<p>No escribio la contraseña</p>";


?>



</body>
</html>