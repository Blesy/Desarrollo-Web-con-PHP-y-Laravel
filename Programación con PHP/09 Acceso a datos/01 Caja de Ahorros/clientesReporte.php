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
                                FROM cuentas";
                                    
        $comandoSQL = $conexion->prepare($consultaSQL);        

        $comandoSQL->execute(); // Ejecuta consulta SELECT
        
        // Establece las variables para obtener los datos
        $comandoSQL->bind_result($idCuenta, $nombre, $correo, 
                                $fechaNacimiento, $genero, $foto);
        
            echo "<table class='table'>";
            echo "<thead class='thead-dark'>";                    
            echo "<tr><th>ID</th><th>Nombre </th><th>Correo</th><th>Fotografia</th><th colpan='3'>";
            echo "</thead>";
            while ($comandoSQL->fetch()==true){ // obtiene los datos
                $imagen = "data:image/jpeg;base64," . base64_encode($foto);    
                echo "<tr><td>$idCuenta</td>
                    <td>$nombre</td>
                    <td> $correo</td>
                    <td><img src='$imagen' width='100px'/></td>
                    <td><a href='clienteDetalle.php?id=$idCuenta'>Detalle</td>
                    <td><a href='clienteEditar.php?id=$idCuenta'>Editar</td>
                    <td><a href='clienteEliminarConfirmar.php?id=$idCuenta'>Eliminar</td>
                  
                    </tr>";  
            }    
        }
        catch(Exception $e){
        echo "Error: " . $e->getMessage();
        }  

    ?>



 </body>
 </html>