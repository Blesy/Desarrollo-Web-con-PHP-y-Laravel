import urllib.request, json
url = "http://localhost/ppa/api/catalogoEmpleados"

# conectar a la API
response = urllib.request.urlopen(url);

# recuperar los Datos
 
datos = json.loads(response.read());

empleados = datos["empleados"] 

print("Lista de empleados") 
# recorre las lista de empleados
for emp in empleados:
    print(emp['nombre'], " ", emp['fechaNacimiento'], " ", emp['genero']) 
