<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
      $idiomas = array("Español", "Ingles", "Portugues", "Aleman", "Chino", "Japones");
    ?>

    <?php

        echo"<select name='idiomas'>";
        for ($i=0; $i<count($idiomas); $i++){
             echo "<option value=$i > $idiomas[$i] </option>";
        }
        echo "</select>";

    ?>



</body>
</html>