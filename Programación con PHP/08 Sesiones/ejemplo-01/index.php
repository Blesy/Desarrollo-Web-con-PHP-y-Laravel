<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
    session_start();
    $_SESSION["miNombre"] = "Jose Perez";
?>

 <p><a href="pagina-02.php"> Pagina2 </a> </p>  
 <p><a href="pagina-03.php"> Pagina3 </a>  </p>

    
</body>
</html>