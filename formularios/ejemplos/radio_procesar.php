<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    if (isset($_POST['sexo'])){
        $sexo = $_POST['sexo'];
        echo "Sexo:" . $sexo . "<br/>";
    }
    else
        echo "No selecciono el sexo <br/>";
?>
</body>
</html>