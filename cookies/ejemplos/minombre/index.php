<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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