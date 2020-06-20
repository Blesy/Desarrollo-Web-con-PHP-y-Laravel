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
           <th colspan='3' >Operaciones</th>
 
        </tr>
        @foreach ($empleados as $empleado)
         <tr>
            <td>{{$empleado->id}}</td> 
            <td>{{$empleado->nombre}}</td> 
            <td>{{($empleado->genero=='F'?'Femenino':'Masculino')}}</td> 
            <td>{{$empleado->fechaNacimiento}}</td> 
            <td>{{$empleado->correo}}</td> 
            <td><a href='empleados/detalle/{{$empleado->id}}'>Detalle</a></td> 
            <td><a href='empleados/editar/{{$empleado->id}}'>Editar</a></td> 
            <td><a href='empleados/eliminar/{{$empleado->id}}'>Eliminar</a></td> 
            
          </tr>       
        @endforeach
           
    </table>

@include ("pie")