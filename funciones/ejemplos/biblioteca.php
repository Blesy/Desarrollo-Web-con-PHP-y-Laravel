<?php
    function sumar($num1, $num2)
    {
       return $num1 + $num2;
    }


    function suma_vector($números) {
        $total = 0;
        foreach ($números as $num) {
        $total += $num;
        }
        return $total;
    }

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
?>