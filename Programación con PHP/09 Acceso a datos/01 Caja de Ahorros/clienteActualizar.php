<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <title>Cliente Guardar</title>
</head>
<body class="p-4" style="width:800px">

 <?php include "cabecera.php";?>
 
 <h2>Cliente Actualizar</h2> 
 <hr/>  

    <?php
        include "config.php";

        try{
        $conexion = new mysqli($servidor, $usuario, 
                                $contraseña, $basededatos);

        // Crea consulta preparada con 3 parametros
        $consultaSQL = "UPDATE cuentas SET nombre=?,
                                        correo=?,
                                        fechaNacimiento=?,
                                        genero=?,
                                        foto=?
                                        WHERE idcuenta=?";
                                    
        $comandoSQL = $conexion->prepare($consultaSQL);        
        
        // Obtiene los valores del formulario
        $idCuenta = $_POST['idcuenta'];
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $fechaNacimiento = $_POST['fechaNacimiento'];
        $genero = $_POST['genero'];

        $foto=null;
        // Asigna valores a cada uno de los 5 parametro de la consulta
        $comandoSQL->bind_param("ssssbi", $nombre,$correo,
                                $fechaNacimiento, $genero, $foto,$idCuenta);
        $comandoSQL->send_long_data(4, file_get_contents($_FILES['foto']['tmp_name']));                                 
        $comandoSQL->execute(); // Ejecuta consulta UPDATE
        echo "Cliente registrado con exito!!!";                                       
        }    
        catch(Exception $e){
        echo "Error: " . $e->getMessage();
        }  

    ?>


 </body>
 </html>