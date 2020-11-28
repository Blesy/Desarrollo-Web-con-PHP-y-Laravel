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
        array("puesto"=>"Gerente", "sueldo"=> 15000),
        array("puesto"=>"Secretaria", "sueldo"=>5000),
        array("puesto"=>"Vigilante", "sueldo"=>4000)
        );
    
    for($i=0;$i<count($puestos);$i++) {
       echo $puestos[$i]['puesto'] . " - " . $puestos[$i]['sueldo'] . "<br/>";
    }

?>

</body>
</html>