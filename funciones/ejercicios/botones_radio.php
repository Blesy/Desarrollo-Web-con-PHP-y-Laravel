<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

function botonesRadio($opciones, $nombre, $id){

    for ($i=0; $i<count($opciones); $i++){

        $op=$id.$i;

        echo "<input type='radio' name='$nombre' id='$op'> $opciones[$i]"  ; 

    }
}
?>

<?php

    $idiomas = array(
        "Español", "Ingles", 
        "Portugues", "Aleman", 
        "Chino", "Japones", "Italiano");


    botonesRadio($idiomas, "idiomas", "idiomas");

    $califaciones = array("Aprobado", "Reprobado", "Pendiente");
    
    echo "<br/>";
    botonesRadio($califaciones, "calif", "calif");

?>

</body>
</html>