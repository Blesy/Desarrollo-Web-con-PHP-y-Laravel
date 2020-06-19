@include ("encabezado")

    <h2>Catalogo de empleados</h2>
    <a href="empleados/crear">Crear</a>

   <table class='table'>
       <tr>
           <th>Id</th>
           <th>Nombre</th>
           <th>Genero</th>
           <th>Fecha Nacimiento</th>
           <th>Correo</th>
        </tr>
        @foreach ($empleados as $empleado)
         <tr>
            <td>{{$empleado->id}}</td> 
            <td>{{$empleado->nombre}}</td> 
            <td>{{$empleado->genero}}</td> 
            <td>{{$empleado->fechaNacimiento}}</td> 
            <td>{{$empleado->correo}}</td> 
          </tr>       
        @endforeach
           
    </table>

@include ("pie")