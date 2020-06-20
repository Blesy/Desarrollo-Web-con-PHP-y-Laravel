import urllib.request, json, sys
url = "http://localhost/ppa/api/infoEmpleado/"

url = url + sys.argv[1]
print(url)

# conectar a la API
response = urllib.request.urlopen(url)

# recuperar los Datos
datos = json.loads(response.read())

emp = datos["empleado"] 

# muestra el empleado solicitado
print(emp['nombre'], " ", emp['fechaNacimiento'], " ", emp['genero']) 
