<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="checkbox_procesar.php" method="post">
        Ocupación:
        <input type="checkbox" name="ocupaciones[]"
        value="empleado" checked>Empleado
        <input type="checkbox" name="ocupaciones[]"
        value="estudiante">Estudiante
        <input type="checkbox" name="ocupaciones[]"
        value= "empresario">Empresario
        <input type="submit" value="aceptar"/>
    </form>
</body>
</html>