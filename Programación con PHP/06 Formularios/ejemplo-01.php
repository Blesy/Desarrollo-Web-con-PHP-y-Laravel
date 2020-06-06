<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Document</title>
</head>
<body style='width:800px'>
    
<form action= 'procesar01.php' method='get'>


    <div class="form-group" >
        <label for='nombre'>Nombre</label>    
        <input type='text' class="form-control" id='nombre' name='nombre'>
        <small id="nombre" class="form-text text-muted">Nombre y Apeliidos</small>
    </div> 
    
    <div class="form-group" >
        <label for='fecha'>Fecha</label>    
        <input type='date' class="form-control" id='fecha' name='fecha'>
        <small id="fecha" class="form-text text-muted">Fecha de nacimiento</small>
    </div> 

    <button input type='submit' class="btn btn-primary" > Aceptar</button>

</form>


</body>
</html>