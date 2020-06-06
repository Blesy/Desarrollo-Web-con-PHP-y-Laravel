<!doctype html>
<html lang="en">
<head>
<title>Cookies</title>
</head>
<body >
<form name="personalizar" action="guardarCookie.php" method="get">
<?php
include "miscookie.php";
echo "Indique nombre: <input type='text' name='miNombre' value='$miNombre' ><br/>";
echo "Seleccione color: <input type='color' name='miColor' value='$miColor' ><br/>";
echo "color de fondo: <input type='color' name='miColorFondo' value='$miColorFondo' /><br/>";
?>
<input type="submit" value="guardar"/>
</form>
</body>
</html>