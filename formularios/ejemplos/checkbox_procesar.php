<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        ini_set('display_errors', 1);
        error_reporting(E_ALL);

        if (isset($_POST['ocupaciones'])){
            $ocupaciones= $_POST['ocupaciones'];
            for ($i=0;$i<count($ocupaciones); $i++)
             echo "Ocupación $i: $ocupaciones[$i] <br/>";
        }
        else
            echo "Debe seleccionar al menos una ocupación<br/>";
        ?>
</body>
</html>