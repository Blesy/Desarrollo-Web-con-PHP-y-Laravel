<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php // Bloque de funciones
    // Funcion que suma 2 numeros pasados como paramentro 
    function sumar($num1, $num2){
      $r = $num1 + $num2;
      return $r;
    }
    // Funcion que suma un arreglo numerico
    function suma_vector($numeros) {
        $total = 0;
        foreach ($numeros as $num) {
           $total += $num;
        }
        return $total;
    }
    // Genera un menu de opciones
    function menuVertical($opciones){
        echo"<ul>";
        while(list($opcion,$enlace)=each($opciones))
        echo "<li><a href='$enlace'>$opcion</a></li>";
        echo "</ul>";
        }


?>
    
<?php 
    $result = sumar(4, 5);
    echo "<p><em>La suma es </em>: <strong>$result</strong></p>";
    
    $datos= array(1,2,3,4,5,6,7,8,9,10);
    $resultado=suma_vector($datos);
    echo "<p><em>La suma del vector es</em>:<strong> $resultado</strong></p>";

    $ops=array("Principal"=>"principal.php",        
                "Consultas"=>"consulta.php",
                "Reportes"=>"reporte.php",
                "Registros"=>"registro.php",
                "Ayuda"=>"ayuda.php",
                "Editar"=>"editar.php");
    
    menuVertical($ops);    

?>
    
</body>
</html>