<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $paises = array("argentina", "mexico", "usa", "japon");
    reset($paises); // coloca el indice al principio
    do
    {
        // Recupera el indice
        $clave = key($paises);
        // Recupera el valor
        $valor = current($paises);
        echo "clave = $clave <br/>";
        echo "valor = $valor <br/>";
    }while(next($paises)); // se mueve al siguiente valor del vector

?>
    
</body>
</html>