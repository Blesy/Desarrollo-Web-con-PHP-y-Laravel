<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    echo "<h2>Acceso con indices </h2>";
    $paises = array("argentina", "mexico", "usa", "japon");
   
    for($i=0; $i < count($paises); $i++){
        echo "indice = $i <br/>";
        echo "valor = $paises[$i] <br/>";
        }

?>

<?php
    echo "<h2>Acceso con reset, next, key y current </h2>";
    $paises = array("argentina", "mexico", "usa", "japon");
    reset($paises);
    do
    {
        $clave = key($paises);
        $valor = current($paises);
        echo "clave = $clave <br/>";
        echo "valor = $valor <br/>";
    }while(next($paises));

?>

<?php
    echo "<h2>Acceso each </h2>";

    $paises = array("argentina", "mexico", "usa", "japon");
    while(list($clave,$valor) = each($paises))
    {
    echo "clave = $clave <br/>";
    echo "valor = $valor <br/>";
    echo "--------------------<br/>";
    }
?>





</body>
</html>