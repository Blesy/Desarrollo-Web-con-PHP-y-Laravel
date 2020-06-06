<!DOCTYPE html>
<html>
<head>
<title>Cookies</title>
</head>
<body>
<?php
if (isset($_COOKIE['miNombre']))
header ("Location: inicio.php");
?>
<form name='principal' method="post" action="guardarCookie.php">
Nombre: <input type="text" name="nombre">
<input type="submit" value="Entrar">
</form>
</body>
</html>