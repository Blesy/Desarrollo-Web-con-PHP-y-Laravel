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
 
 <h2>Cliente Reportes</h2> 
 <hr/>  

 <?php
        include "config.php";

        try{
        $conexion = new mysqli($servidor, $usuario, 
                                $contraseña, $basededatos);

        // Crea consulta preparada
        $consultaSQL = "SELECT idcuenta, nombre, correo, fechaNacimiento, 
                                genero, foto 
                                FROM cuentas WHERE idcuenta=?";

        $id=$_GET['id'];
            
        $comandoSQL = $conexion->prepare($consultaSQL);        
        $comandoSQL->bind_param("i", $id);    
        $comandoSQL->execute(); // Ejecuta consulta SELECT
        
        // Establece las variables para obtener los datos
        $comandoSQL->bind_result($idCuenta, $nombre, $correo, 
                                $fechaNacimiento, $genero, $foto);
        
            if ($comandoSQL->fetch()==true){ // obtiene los datos
                echo "<table class='table'>";
                echo "<thead class='thead-dark'>";                    
                echo "</thead>";
                 $imagen = "data:image/jpeg;base64," . base64_encode($foto);    
                 $descGenero = ($genero=='F'?'Femenino':'Masculino');   
                 echo "<tr><th>ID</th><td>$idCuenta</td></tr>
                      <tr><th>Nombre</th><td>$nombre</td></tr>
                      <tr><th>Correo</th><td> $correo</td></tr>
                      <tr><th>Correo</th><td> $fechaNacimiento</td></tr>
                      <tr><th>Correo</th><td> $descGenero</td></tr>
                      <tr><th>Fotografia</th><td><img src='$imagen' width='100px'/></td></tr>";
                         
                 echo "</table>";

            }
            else
                echo "<h3>Cliente no existe!!!</h3>";
    
        }
        catch(Exception $e){
        echo "Error: " . $e->getMessage();
        }  

    ?>



 </body>
 </html>