# Proyecto1
Este es el proyecto uno que es un trabajo hacer de un sitio donde estan almacenados 5000 libros con su respectivo isbn, nombre, autor y año.

El proyecto para funcionar necesita:
SqlAlchemy
psslib
Flask
Flask-Session
psycopg2-binary
gunicorn
requests

El archivo app es como quien dice el nucleo del proyecto ya que contiene:
El codigo para logearse con la base de datos, registrarse y que se guarde en la base de datos, busqueda de los libros que estan en la base de datos, y rutas para la verificación de registro, login, perfil y busqueda.

El archivo config para poder usar la base de datos

Tanto el archivo de login y user podrimos decir que son archivos volatiles porque cuando se logea y registra se escribe codigo en ellos pero una vez que terminas este se borra

Y el archivo importar es para subir los libros a la base de datos

En la carpeta pycache se encuentra el bytecode de Phyton

En la carpeta de templates se encuentran lo que vendrian siendo las interfaces de cada pantalla:
busqueda: en la interfaz donde buscas por isbn
home: es una extención del index que sirve para llamar al index sin necesidad de hacer referencia directa a el
index: es donde esta la pantalla principal para acceder al registro o al login
libro: es la pagina donde sale el autor, isbn, nombre y año del libro
login: es la pantalla donde se realice el login con un usuario y contraseña
perfil: es la pantalla que aparece despues de logearte para verificar que si entraste con tu cuenta
registrar: es la pantalla para registrar a un usuario con su respectivo usuario y contraseña
stilos: es el css

El archivo books son los libros que se subieron a la base de datos
