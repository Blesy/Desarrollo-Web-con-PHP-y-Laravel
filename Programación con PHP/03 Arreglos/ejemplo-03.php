<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php

$paises = array("brasil","argentina", "mexico", "usa", "japon");


while(list($clave,$valor) = each($paises))
{
    echo "<input type='radio' 
            name='paises' value='$clave' > $valor";
    }




?>

</body>
</html>