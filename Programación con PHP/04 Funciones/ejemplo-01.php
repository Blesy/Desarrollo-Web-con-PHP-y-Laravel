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

    function sumatoria()
    {
        $numeroParametros = func_num_args();
        $parametros = func_get_args();
        $suma = 0;
        for($i=0; $i < $numeroParametros; $i++)
        {
        $suma += $parametros[$i];
        }
        return $suma;
    }

    function incrementar (&$dato, $incremento)
    {
        $dato += $incremento;
    }

    function mostrarCadena ()
    {
        $cadena = "Cadena local";
        echo "Cadena 2 = " . $cadena . "<br>";
        echo "Cadena 1 GLOBAL = " . $GLOBALS['cadena'] . "<br />";
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

    $x = sumatoria(1,2,3,4,5);
    $y = sumatoria (6,7,8,9,10,11,12,13,14,15);

    echo "<p>valor de x= $x </p>";
    echo "<p>valor de y= $y </p>";

    $val = 10;
    echo "Valor original = " . $val . "<br/>";
    incrementar ($val, 30);
    echo "Valor modificado = " . $val . "<br/>";

    $cadena = "Cadena global";
    echo "Cadena 1 = ".$cadena."<br />";
    mostrarCadena();


?>
    
</body>
</html>