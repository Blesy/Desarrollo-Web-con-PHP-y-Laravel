<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    if(isset($_POST['idiomas']) ){
        $idiomas = $_POST['idiomas'];
        foreach ($idiomas as $idioma)
            echo "Idioma: $idioma <br>";
    }
    else
        echo "Debe seleccionar al menos un idioma<br/>";
?>



</body>
</html>