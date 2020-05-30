<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    $paises = array("argentina", "mexico", "usa", "japon");
    echo "<table>";
    for($i=0; $i < count($paises); $i++)
    {
       echo "<tr>";
       echo "<td> $i </td>";
       echo "<td>$paises[$i]</td>";
       echo "<tr>";
    }
    echo "</table>";

?>
</body>
</html>