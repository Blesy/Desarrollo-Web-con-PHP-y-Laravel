<?php
    // verifica si existe el color de fondo y utiliza su valor
    if (isset($_COOKIE['miColorFondo']))
    $miColorFondo=$_COOKIE['miColorFondo'];
    else
    $miColorFondo="#FFFFFF";
    //verifica si existe el color de primer plano y utiliza su valor
    if (isset($_COOKIE['miColor']))
    $miColor=$_COOKIE['miColor'];
    else
    $miColor="#000000";
    //verifica si existe el nombre utiliza su valor
    if (isset($_COOKIE['miNombre']))
    $miNombre=$_COOKIE['miNombre'];
    else
    $miNombre="Desconocido";
?>