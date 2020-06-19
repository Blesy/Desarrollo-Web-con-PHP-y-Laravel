@include ("encabezado")

    <h2>Detalle de empleado</h2>

   <table class='table'>
         <tr><th>Id</th><td>{{$empleado->id}}</td></tr> 
         <tr><th>Nombre</th><td>{{$empleado->nombre}}</td></tr> 
         <tr><th>Genero</th><td>{{($empleado->genero=='F'?'Femenino':'Masculino')}}</td> </tr>
         <tr><th>Fecha Nacimiento</th><td>{{$empleado->fechaNacimiento}}</td></tr> 
         <tr><th>Correo</th><td>{{$empleado->correo}}</td></tr> 
    </table>

@include ("pie")