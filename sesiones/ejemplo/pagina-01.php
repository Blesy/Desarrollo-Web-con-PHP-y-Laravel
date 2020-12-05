<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    session_start();
    if (!isset($_SESSION["auth"])){
        header("Location: index.php");
    }
?>
    <a href="cerrar.php"> Cerrar sesión</a>

    <h1>Pagina 01</h1>
</body>
</html>