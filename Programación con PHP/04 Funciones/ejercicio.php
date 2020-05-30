<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php // Funciones 
   
   function selector ($opciones, $nombre, $multiple, $tam){

    if ($multiple==true)
        $tipo = 'multiple';
    else
        $tipo ='';    

    echo "<select name='$nombre' $tipo size='$tam' >";
    do
    {
        // Recupera el indice
        $clave = key($opciones);
        // Recupera el valor
        $valor = current($opciones);
        echo "<option value='$clave'>$valor </option> ";
    }while(next($opciones)); // se mueve al siguiente valor del vector
    echo "</select>";

    };  
?>

<?php 
    $lista = array(
        "1" => "Culiacán",
        "2" => "Mazatlán",
        "3" => "Los Mochis",
        "4" => "Navolato"
        
    );

    selector($lista, "municipio", true, 2 );    

?>



</body>
</html>