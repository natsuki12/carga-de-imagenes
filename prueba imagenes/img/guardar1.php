<?php
//conectar con el servidor
$link =@mysqli_connect("localhost","root", "") or die ("<h2>No se encuentra el servidor</h2>");;
$db = mysql_select_db("datos",$link) or die ("<h2>Error de conexion</h2>");

//obtener valores del formulario
$nombre = $_POST('nombre');
$apellido = $_POST('apellido');
$usuario = $_POST('usuario');
$correo = $_POST('correo');
$telefono = $_POST('telefono');
$cedula = $_POST('cedula');
$clave = $_POST('clave');
$nivel = $_POST('nivel');

mysqli_query("INSERT INTO datos VALUES('','$nombre','$apellido','$usuario','$correo','$telefono','$cedula','$clave','$nivel')",$link) ;
echo "
 
              <h2>Registro Completado </h2>";
?>
