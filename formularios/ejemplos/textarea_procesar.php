<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        if(isset($_POST['comentario'])){
            $comentario = $_POST['comentario'];
            if(empty($comentario)==false)
            echo "Su comentario es: $comentario";
            else
            echo "El comentario no puede estar vacío";
        }
        else
            echo "No existe Comentario";
    ?>  
</body>
</html>