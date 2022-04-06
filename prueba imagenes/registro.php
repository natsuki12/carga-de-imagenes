<?php

	$nombre=$_POST['nombre'];
	$apellido=$_POST['apellido'];
	$usuario=$_POST['user'];
	$mail=$_POST['mail'];
	$pass= $_POST['pass'];
	$rpass=$_POST['rpass'];
	$telefono=$_POST['telefono'];
	$cedula=$_POST['cedula'];

	require("conexion.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("conexion.php");
	$checkemail=mysqli_query($mysqli,"SELECT * FROM datos WHERE email='$mail'");
	$check_mail=mysqli_num_rows($checkemail);
		if($pass==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}else{
				
				//require("connect_db.php");
//la variable  $mysqli viene de connect_db que lo traigo con el require("conexion.php");
				mysqli_query($mysqli,"INSERT INTO datos VALUES('','$nombre','$apellido','$usuario','$pass','$mail','$telefono','$cedula','','2')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				
			}
			
		}else{
			echo 'Las contraseñas son incorrectas';
		}

	
?>