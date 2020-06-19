@include ("encabezado")
    
<h2>Crear empleado</h2>

<hr/>  

 <form action='guardar' method='post' enctype='multipart/form-data' >
    
  <input type = "hidden" name = "_token" value = "<?php echo csrf_token(); ?>">
    <div class='form-group'>
        <label for='nombre'>Nombre:</label>    
        <input type="text" class="form-control" id='nombre' name="nombre" requiere placeholder="escriba su nombre" >
        <small id="nombre" class="form-text text-muted">Nombre y apellidos</small>
   </div>

   <div class='form-group'>
        <label for='nombre'>RFC:</label>    
        <input type="text" class="form-control" id='RFC' name="RFC" requiere placeholder="escriba su RFC" >
        <small id="RFC" class="form-text text-muted">Registro Federal de Causante</small>
   </div>

   <div>Genero</div>
   <div class='form-group'>
        <div class="custom-control custom-radio">
                <input type="radio" class="custom-control-input"  id='femenino' name='genero' value='F' checked>
                <label class="custom-control-label" for="femenino">Femenino</label>    
        </div>
        <div class="custom-control custom-radio">
            <input type="radio" class="custom-control-input"  id='masculino' name='genero' value='M' >
            <label class="custom-control-label" for="masculino">Masculino</label>    
        </div>
    </div>
   <div class='form-group'>
       <label for='fechaNacimiento'>Fecha de nacimiento</label>
       <input type='date' class='form-control' id='fechaNacimiento' name='fechaNacimiento'>
       <small id="fechaNacimiento" class="form-text text-muted">Solo se aceptan clientes mayores de 18 años</small>
    </div> 

    <div class='form-group'>
       <label for='fechaContrato'>Fecha de contrato</label>
       <input type='date' class='form-control' id='fechaContrato' name='fechaContrato'>
       <small id="fechaContrato" class="form-text text-muted">Solo se aceptan clientes mayores de 18 años</small>
    </div> 

   <div class='form-group'>
       <label for='correo'>Correo electrónico</label>
       <input type='email' class='form-control' id='correo' name='correo'placeholder='usuario@dominio.com'>
       <small id="correo" class="form-text text-muted">Escriba un correo con formato valido y existente</small>
     </div> 
   
    <div class='form-group'>
        <label for="direccion">Dirección</label>
        <textarea  class="form-control" cols="50" rows="10" id="direccion" name="direccion"></textarea>
        <small id="direccion" class="form-text text-muted">Indique entre que calles y alguna referencia visible</small>
    </div>

    <div class="custom-file">
        <input type='file'  class="custom-file-input" id='foto' name='foto' required accept=".jpg, .png"  >
        <label id='mensaje' class="custom-file-label" for='foto'>Seleccione fotografia</label>
    </div> 

        <button type="submit" class="btn btn-primary">Enviar</button>




</form>
<script>
            $('#foto').on('change',function(){
                //obtiene el nombre del archivo
                var nomArch = $(this).val();
                //remplaza  "Seleccione fotografia" por el nombre del archivo
                $(this).next('.custom-file-label').html(nomArch);
            })
        </script>
</body>
</html>



@include ("pie")

