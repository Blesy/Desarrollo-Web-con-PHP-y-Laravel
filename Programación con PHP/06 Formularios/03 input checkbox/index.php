<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style='width:800px'>
    
<form action= 'procesar.php' method='get'>


    <div class="form-group" >
        <label for='nombre'>Nombre</label>    
        <input type='text' class="form-control" id='nombre' name='nombre'>
        <small id="nombre" class="form-text text-muted">Nombre y Apeliidos</small>
    </div> 
    
    <div class="form-group" >
        <label for='edad'>Edad</label>    
        <input type='text' class="form-control" id='edad' name='edad'>
        <small id="edad" class="form-text text-muted">Valor numerico</small>
    </div> 

    <div class="form-check">
        <input type="radio" class="form-check-input" id="mujer" name="sexo" value="m" checked>
        <label class="form-check-label" for="mujer">Femenino</label>
    </div>    
    <div class="form-check">
    <input type="radio" class="form-check-input" id="hombre" name="sexo" value="h">
    <label class="form-check-label" for="hombre">Masculino</label>
    </div>    

    Ocupación:
    <div class="form-check">
      <input type="checkbox" name="ocupaciones[]" id="empleado"
            value="empleado" checked>
     <label class="form-check-label" for="empleado">Empleado</label>
    </div>
    <div class="form-check">
        <input type="checkbox" name="ocupaciones[]" id="estudiante"
        value="estudiante">
        <label class="form-check-label" for="estudiante">Estudiante</label>
    </div>
    <div class="form-check">
        <input type="checkbox" name="ocupaciones[]" id="empresario"
        value= "empresario">
        <label class="form-check-label" for="empresario">Empresario</label>
    </div>

    <div class="form-group" >
        <label for='pwd01'>Contraseña</label>    
        <input type='password' class="form-control" id='pwd01' name='pwd01'>
        <small id="pwd01" class="form-text text-muted">Escriba una contraseña</small>
    </div> 
    <div class="form-group" >
        <label for='pwd02'>Cofirmar Contraseña</label>    
        <input type='password' class="form-control" id='pwd02' name='pwd02'>
        <small id="pwd02" class="form-text text-muted">Confirmar una contraseña</small>
    </div> 
    <div class="form-group">
    <label for="color">Color Favorito</label>
        <select name="color" id="color" class="form-control"  >
            <option value="rojo" selected>rojo
            <option value="verde">verde
            <option value="azul">azul
        </select>
    </div>

    <div class="form-group">
    <label for="color">Idiomas que domina</label>
    <select multiple size="3" name="idiomas[]" class="form-control">
        <option value="español" >Español
        <option value="ingles" >Inglés
        <option value="frances">Francés
        <option value="aleman">Alemán
        <option value="holandes">Holandés
    </select>
</div>
    <div class="form-group">
    <label for="comentario">Escriba un comentario</label>
        <textarea cols="50" rows="10" id="comentario" name="comentario" class="form-control" ></textarea>
    </div>
    <button input type='submit' class="btn btn-primary" >Aceptar</button>

</form>


</body>
</html>