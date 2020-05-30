<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

 <?php
    echo "Seleccione la fecha ";
    echo "<select name='dd'>";
    for ($i=1 ; $i<=31;$i++)
        echo "<option value='$i'>$i</option>";
    echo "</select>";
    echo " / ";
    echo "<select name='mm'>";
    for ($i=1 ; $i<=12;$i++)
        echo "<option value='$i'>$i</option>";
    echo "</select>";
    echo " / ";
 
    echo "<select name='aa' >";
    for ($i=2020; $i>=1950; $i--)
        echo "<option value='$i'>$i</option>";
    echo "</select>";
 
 ?>   


    
</body>
</html>