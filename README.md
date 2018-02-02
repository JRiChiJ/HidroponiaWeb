# HidroponiaWeb
Se utiliza como framework el bootstrap 4.0.0, tambien utilizamos php7 para el backend, html para el frontend, css para los estilos
y js para el funcionamiento correcto de la pagina ya sea botones, la navbar, para redireccionar la pagina
Para hacer la prueba del codigo debe clonar o descargar la carpeta HidroponiaWeb luego crear una base de datos en phpmyadmin y 
agregar las tablas y datos de la base de datos. Luego debe modificar el archivo config.php que se encuentra en la ruta admin/conf
lo que se debe modificar es esta linea de codigo $con = @mysqli_connect("localhost","root","hola70859604"); donde sale locahost 
se debe dejarlo en localhost al menos que la base no sea local y tenga ip, el root no se debe tocar ya que todos los 
controladores de base de datos utilizan ese nombre para su coneccion y luego la contraseña si es que posee alguna.

#Agregar la base de datos
Cree una nueva base de datos y luego en su gestor de base de datas ejemplo(phpmyadmin) valla a la opcion SQL y copie el lo que contiene el archivo hidroweb_prueba_.sql con esto se añadir datos a su base de datos V

#Sugerencias
Este codigo esta echo en php7 haci que si utiliza versiones anteriores del php debera fijarse en la sintaxis de anteriores versiones de php.
Verifique bien el archivo conf que esta dentro de la carpte config ya que ahi se le debe colocar el nombre a la base de datos que se le quiera conectar, si tiene localhost , root y contraseña(el xammpp no viene por defecto sin contraseña) deje el campo vacio si tiene xampp, ejemplo: 
@mysqli_connect("localhos o ip","root","contraseña");
