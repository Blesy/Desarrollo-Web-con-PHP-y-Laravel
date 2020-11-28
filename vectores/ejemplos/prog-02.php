<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

    $puestos = array(
        array("Gerente", 15000),
        array("Secretaria", 5000),
        array("Vigilante", 4000)
    );
    
    for($i=0;$i<count($puestos);$i++) {
        echo $puestos[$i][0] . " - " . $puestos[$i][1] . "<br/>";
    }


?>

</body>
</html>