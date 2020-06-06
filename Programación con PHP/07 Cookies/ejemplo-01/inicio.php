<!DOCTYPE html>
<html>
<head>
<title>Cookies</title>
</head>
<body>
<?php
if (!isset($_COOKIE['miNombre']))
header ("Location: index.php");

echo "Bienvenido: " . $_COOKIE['miNombre'];
?>

</body>
</html>