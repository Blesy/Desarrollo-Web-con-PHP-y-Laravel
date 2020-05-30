<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style="width:800px">
    
<form action= 'procesar01.php' method='post'>
    <div class='form-group'>
        <label for='nombre'>Nombre:</label>    
        <input type="text" class="form-control" id='nombre' name="nombre" placeholder="escriba su nombre" >
        <small id="nombre" class="form-text text-muted">Nombre y apellidos</small>
   </div>
   <div class='form-group'>
       <label for='edad'>Edad</label>
       <input type='date' class='form-control' id='edad' name='edad'>
   </div> 

   <div class='form-check'>
        <input type="radio" class="form-check-input"  id='femenino' name='sexo' value='m' checked>
        <label class="form-check-label" for="femenino">Femenino</label>    
    </div>

    <div class='form-check'>    
        <input type='radio' class='form-check-input'  id='masculino' name='sexo' value='h'>
        <label class='form-check-label' for='masculino'>Femenino</label>    
    </div>

    <div class='form-check'>
        <input type="checkbox" class='form-check-input' id='empleado' name="ocupaciones[]"
            value="empleado" checked>
        <label for='empleado' class='form-check-label'>Empleado</label>   
    </div>
    <div class='form-check'>
        <input type="checkbox" class='form-check-input'' id='estudiante' name="ocupaciones[]"
            value="estudiante">
        <label for='estudiante' class='form-check-label'>Estudiante</label>   
    </div>
    
    <div class='form-check'>
        <input type="checkbox" class='form-check-input' id='empresario' name="ocupaciones[]"
            value= "empresario">
        <label for='empresario' class='form-check-label'>Empresario</label>   
    </div>
     
    <div class='form-group'>
        <label for='color'>Color Favorito </label>
        <select id='color' name="color" class="form-control" >
            <option value=" rojo" selected>rojo
            <option value="verde">verde
            <option value="azul">azul
        </select>
    </div>        
    <div class='form-group'></div>
        <label for="comentario">Comentarios</label>
        <textarea  class="form-control" cols="50" rows="10" id="comentario" name="comentario"></textarea>
    </div>
    

    
    <button type="submit" class="btn btn-primary">Enviar</button>

</form>

</body>
</html>