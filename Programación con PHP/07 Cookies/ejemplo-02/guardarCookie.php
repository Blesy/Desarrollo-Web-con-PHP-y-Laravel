<?php
// verifica si tiene información para cookie
if (!empty($_GET['miColorFondo'])){
$duracion = time() + 60*60*24*365; // un año
setcookie("miColorFondo", $_GET['miColorFondo'], $duracion);
}
// verifica si tiene información para cookie
if (!empty($_GET['miColor'])){
$duracion = time() + 60*60*24*365; // un año
setcookie("miColor", $_GET['miColor'], $duracion);
}
// verifica si tiene información para cookie
if(!empty($_GET['miNombre'])){
$duracion = time() + 60*60*24*365; // un año
setcookie("miNombre", $_GET['miNombre'], $duracion);
}
//Se redirige a pagina personal
header ("Location: index.php");
?>