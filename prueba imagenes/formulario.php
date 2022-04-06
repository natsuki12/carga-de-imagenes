<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="include/estilos.css">
	<title>Cines R&R</title>
</head>
<body background="images/Theseus.png" style="background-attachment: fixed" >
	<center><div class="tit"><h2 style="color: #FFFFFF;">Inicio de sesión</h2>
		<center><div class="Ingreso">

	<table border="0" align="center" valign="middle">
		<tr>
		<td rowspan=2>
		<form action="validar.php" method="post">

		<table border="0">

		<tr><td><label style="font-size: 14pt; color: #FFFFFF;"><b>Correo: </b></label></td>
			<td width=80> <input class="form-group has-success" style="border-radius:15px;" type="text" name="mail"></td></tr>
		<tr><td><label style="font-size: 14pt; color: #FFFFFF"><b>Contraseña: </b></label></td>
			<td witdh=80><input style="border-radius:15px;" type="pass" name="pass"></td></tr>
		<tr><td></td>
			<td width=80 align=center><input class="btn btn-primary" type="submit" value="Aceptar"></td>
			</tr></tr></table>
		</form>
<br>
<!-- formulario registro -->

<form method="post" action="" >
  <fieldset>
    <legend  style="font-size: 18pt; color: #FFFFFF"><b>Registro</b></legend>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>nombre</b></label>
      <input type="text" name="nombre" class="form-control" required placeholder="Ingresa tu nombre" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>Apellido</b></label>
      <input type="text" name="apellido" class="form-control" required placeholder="Ingresa tu apellido" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>usuario</b></label>
      <input type="text" name="user" class="form-control" required placeholder="Ingresa tu nombre de usuario" />
    </div>
	 <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>Password</b></label>
      <input type="password" name="pass" class="form-control"  required placeholder="Ingresa contraseña" />
    </div>
	    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>Repite contraseña</b></label>
      <input type="password" name="rpass" class="form-control" required placeholder="repite contraseña" />
    </div>
    <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF;"><b>email</b></label>
      <input type="email" name="mail" class="form-control"  required placeholder="Ingresa mail"/>
    </div>
   <div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>telefono</b></label>
      <input type="text" name="telefono"  pattern="[0-9]{11}"class="form-control" required placeholder="Ingresa tu telefono" />
    </div>
	<div class="form-group">
      <label style="font-size: 14pt; color: #FFFFFF"><b>cedula</b></label>
      <input type="text" name="cedula" pattern="^([VEJPG]{1})([0-9]{7,9})$"required placeholder="debe indicarse con VEJPG"  />
    </div>
    </div>
   
    <input  class="btn btn-danger" type="submit" name="submit" value="Registrarse"/>

  </fieldset>
</form>
</div>
<?php
		if(isset($_POST['submit'])){
			require("registro.php");
		}
	?>
<!--Fin formulario registro -->

		</td>
		</tr>
		</table>
		</div></center></div></center>

	
</body>
</html>