@include ("encabezado")

    <h2>Reporte de empleados por Genero</h2>

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
          
          </tr>       
        @endforeach
           
    </table>

@include ("pie")