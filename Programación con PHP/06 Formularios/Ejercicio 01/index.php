<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  
    <title>Calculo de sueldo</title>
</head>
<body style="width:400px">

<h1>Calculo del sueldo</h1>
   <?php include "configuracion.php";?>
    
    <form action='calculos.php' method='post'>

    <div class="form-group" >
        <label for='nombre'>Nombre</label>    
        <input type='text' class="form-control" id='nombre' name='nombre'>
        <small id="nombre" class="form-text text-muted">Nombre y Apellidos</small>
    </div> 
    
    <div class="form-group" >
        <label for='fecha'>Fecha de nacimiento</label>    
        <input type='date' class="form-control" id='fecha' name='fecha'>
        <small id="fecha" class="form-text text-muted">Seleccione la fecha correcta</small>
    </div> 

    <div class="form-group" >
    <label for='puestos'>Puestos</label>    
    <select name='puestos' id='puestos' class="form-control" >
    <?php
            for ($i=0;$i< count($puestos); $i++ ){
                $puesto = $puestos[$i]['descripcion'];
                echo "<option value='$i'> $puesto </option>";
            }    
    ?>
    </select>
    </div>

    <div class="form-group" >
    <label for='turnos'>Turnos</label>    
    <select name='turnos' id='turnos' class="form-control" >
    <?php
            for ($i=0;$i< count($turnos); $i++ ){
                $turno = $turnos[$i]['desc'];
                echo "<option value='$i'> $turno </option>";
            }    
    ?>
    </select>
    </div>        
    Genero
    <div class="form-check">
        <input type="radio" class="form-check-input" id="femenino" name="genero" value="F" checked>
        <label class="form-check-label" for="femenino">Femenino</label>
    </div>    
    <div class="form-check">
    <input type="radio" class="form-check-input" id="masculino" name="genero" value="M">
    <label class="form-check-label" for="masculino">Masculino</label>
    </div> 

    <div class="form-group" >
    <label for='estado'>Estado Civil</label>    
    <select name='estado' id='estado' class="form-control" >
    <?php
            for ($i=0;$i< count($estadoCivil); $i++ ){
                $estado = $estadoCivil[$i]['desc'];
                echo "<option value='$i'> $estado </option>";
            }    
    ?>
    </select>
    </div>  
    
    <div class="form-check">
        <input type="checkbox" name="estudia" id="estudia"
        value="S">
        <label class="form-check-label" for="estudiante">Estudia?</label>
    </div>

    <button input type='submit' class="btn btn-primary" >Calcular</button>

    </form>

</body>
</html>