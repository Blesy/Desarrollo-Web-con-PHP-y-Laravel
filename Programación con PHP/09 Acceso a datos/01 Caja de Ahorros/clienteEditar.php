<!DOCTYPE html>
<html lang='en'>
<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css' integrity='sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk' crossorigin='anonymous'>
    <script src='https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
    <title>Cliente Editar</title>
</head>
<body class='p-4' style='width:800px'>

 <?php include 'cabecera.php';?>
 <h2>Cliente Editar</h2> 
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
                
                $imagen = "data:image/jpeg;base64," . base64_encode($foto);    
                $estadoF = ($genero=='F'? 'checked':'');
                $estadoM = ($genero=='M'? 'checked':'');
                echo "
                <form action='clienteActualizar.php' method='post' enctype='multipart/form-data' >
                    <div class='form-group'>
                        <label for='nombre'>ID:</label>    
                        <input type='text' value='$idCuenta' readonly class='form-control' id='idcuenta' name='idcuenta' >
                        <small id='idcuenta' class='form-text text-muted'>Numero de cuenta</small>
                        </div>
                        <div class='form-group'>
                        <label for='nombre'>Nombre:</label>    
                        <input type='text' value='$nombre' class='form-control' id='nombre' name='nombre'  requiere placeholder='escriba su nombre' >
                        <small id='nombre' class='form-text text-muted'>Nombre y apellidos</small>
                   </div>
                   <div>Genero</div>
                   <div class='form-group'>
                        <div class='custom-control custom-radio'>
                                <input type='radio' $estadoF class='custom-control-input'  id='femenino' name='genero' value='F'>
                                <label class='custom-control-label' for='femenino'>Femenino</label>    
                        </div>
                        <div class='custom-control custom-radio'>
                            <input type='radio' $estadoM class='custom-control-input'  id='masculino' name='genero' value='M' >
                            <label class='custom-control-label' for='masculino'>Masculino</label>    
                        </div>
                    </div>
                   <div class='form-group'>
                       <label for='fechaNacimiento'>Fecha de nacimiento</label>
                       <input type='date' value='$fechaNacimiento' class='form-control' id='fechaNacimiento' name='fechaNacimiento'>
                       <small id='fechaNacimiento' class='form-text text-muted'>Solo se aceptan clientes mayores de 18 años</small>
                    </div> 
                
                   <div class='form-group'>
                       <label for='correo'>Correo electrónico</label>
                       <input type='email' value='$correo' class='form-control' id='correo'  name='correo'placeholder='usuario@dominio.com'>
                       <small id='correo' class='form-text text-muted'>Escriba un correo con formato valido y existente</small>
                     </div> 
                   
                    <div class='form-group'>
                        <label for='direccion'>Dirección</label>
                        <textarea  class='form-control' cols='50' rows='10' id='direccion' name='direccion'>$direccion</textarea>
                        <small id='direccion' class='form-text text-muted'>Indique entre que calles y alguna referencia visible</small>
                    </div>
                    <img src='$imagen' width='100px'/>
                     
                    <div class='custom-file'>
                          <input type='file'  class='custom-file-input' id='foto' name='foto' accept='.jpg, .png'  >
                        <label id='mensaje' class='custom-file-label' for='foto'>Seleccione fotografia</label>
                    </div> 
                
                        <button type='submit' class='btn btn-primary'>Enviar</button>
                
                
                
                
                </form>";
                    
            }
            else
                echo "<h3>Cliente no existe!!!</h3>";
    
        }
        catch(Exception $e){
        echo "Error: " . $e->getMessage();
        }  

    ?>

<script>
            $('#foto').on('change',function(){
                //obtiene el nombre del archivo
                var nomArch = $(this).val();
                //remplaza  'Seleccione fotografia' por el nombre del archivo
                $(this).next('.custom-file-label').html(nomArch);
            })
        </script>
</body>
</html>