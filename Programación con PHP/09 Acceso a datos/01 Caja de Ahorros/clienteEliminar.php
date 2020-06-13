<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Clientes Reporte</title>
</head>
<body class="p-4" style="width:800px">

 <?php include "cabecera.php";?>
 
 <h2>Cliente Eliminar</h2> 
 <hr/>  

 <?php
        include "config.php";

        try{
        $conexion = new mysqli($servidor, $usuario, 
                                $contraseña, $basededatos);

        // Crea consulta preparada
        $consultaSQL = "DELETE FROM cuentas WHERE idcuenta=?";

        $id=$_GET['id'];
            
        $comandoSQL = $conexion->prepare($consultaSQL);        
        $comandoSQL->bind_param("i", $id);    
        $comandoSQL->execute(); // Ejecuta consulta SELECT
        
        echo "<h3>Cliente eliminado satisfactoriamente!!!</h3>";
    
        }
        catch(Exception $e){
        echo "Error: " . $e->getMessage();
        }  

    ?>



 </body>
 </html>