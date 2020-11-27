<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<?php
$i = $_GET['v'];
switch ($i)
{
    case 0:
    case 1:
    case 2:
    case 3:
    case 4:
    case 5:
        echo "Reprobado con $i";
        break;
    case 6:
    case 7:
    case 8:
    case 9:
    case 10:
        echo "Aprobado con $i";
        break;          
    default:
        echo "Calificacion no valida!!";
}
?>



</body>
</html>