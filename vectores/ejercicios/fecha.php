<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
    $dd = $_GET['d'];
    $mm = $_GET['m'];
    $aa = $_GET['a'];

    echo "<select>";
    for ($i=1; $i<=31; $i++){
      
      if ($i==$dd) 
        echo "<option value='$i' selected>$i</option>";
      else  
        echo "<option value='$i'>$i</option>";  
    }
    echo "</select>";

    echo "<select>";
    for ($i=1; $i<=12; $i++){
        
      if ($i==$mm) 
        echo "<option value='$i' selected>$i</option>";
        else  
          echo "<option value='$i'>$i</option>";

    }
    echo "</select>";

    echo "<select>";
    for ($i=2020; $i>=2000; $i--){
   
        if ($i==$aa) 
            echo "<option value='$i' selected>$i</option>";
        else  
          echo "<option value='$i'>$i</option>";
    }    
    echo "</select>";


?>



</body>
</html>