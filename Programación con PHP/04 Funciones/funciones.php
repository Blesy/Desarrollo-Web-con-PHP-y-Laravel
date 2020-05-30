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
    