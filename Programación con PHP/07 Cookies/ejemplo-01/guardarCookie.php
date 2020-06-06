<?php
if (isset($_POST['nombre'])){
$duracion = time() + 60*60; // un minuto
setcookie("miNombre", $_POST['nombre'], $duracion);
header("Location: inicio.php");
}
else
header ("Location: index.php");
?>

