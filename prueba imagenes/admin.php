<!DOCTYPE html>
<?php
session_start();
if (@!$_SESSION['user']) {
	header("Location:admin.php");
}elseif ($_SESSION['rol']==2) {
	header("Location:index.html");
}
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Theseus</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="Cesar Requena">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet"/>
	<link rel="stylesheet" type="text/css" href="include/estilos.css">

    <link rel="shortcut icon" href="assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="assets/ico/apple-touch-icon-57-precomposed.png">
  </head>
  </head>
<body data-offset="40" background="images/Fondo2.jpg" style="background-attachment: fixed">

<div class="container">
<header class="header">
<div class="row">
	<?php
	include("include/cabecera.php");
	?>
</div>
</header>

  <!-- Navbar
    ================================================== -->

<div class="navbar">
  <div class="navbar-inner">
	<div class="container">
	  <div class="nav-collapse">
		<ul class="nav">
			<li class=""><a href="admin.php">ADMINISTRADOR DEL SITIO</a></li>

	
		</ul>
		<form action="#" class="navbar-search form-inline" style="margin-top:6px">
		
		</form>
		<ul class="nav pull-right">
		<li><a href="">Bienvenido <strong><?php echo $_SESSION['user'];?></strong> </a></li>
			  <li><a href="desconectar.php"> Cerrar Cesión </a></li>			 
		</ul>
	  </div><!-- /.nav-collapse -->
	</div>
  </div><!-- /navbar-inner -->
</div>

<!-- ======================================================================================================================== -->
<div class="row">
	
	
		
	<div class="span12">

		<div class="caption">
		
<!--///////////////////////////////////////////////////Empieza cuerpo del documento interno////////////////////////////////////////////-->
		<h2 style="color:white;"> Administracion de usuarios registrados</h2>	

		<hr class="soft"/>
		<h4>Tabla de Usuarios</h4>
		<div class="row-fluid">
		



			<?php

				require("conexion.php");
				$sql=("SELECT * FROM datos");
	
//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
				$query=mysqli_query($mysqli,$sql);

				echo "<table border='3';>";
					echo "<tr class='warning'>";
						echo "<td style=color:white>Id</td>";
						echo "<td style=color:white>Nombre</td>";
						echo "<td style=color:white>Apellido</td>";
						echo "<td style=color:white>Usaurio</td>";
						echo "<td style=color:white>Password</td>";
						echo "<td style=color:white>Correo</td>";
						echo "<td style=color:white>Telefono</td>";
						echo "<td style=color:white>Cedula</td>";
						echo "<td style=color:white>Password del administrador</td>";
						echo "<td style=color:white>Editar</td>";
						echo "<td style=color:white>Borrar</td>";
					echo "</tr>";

			    
			?>
			  
			<?php 
				 while($arreglo=mysqli_fetch_array($query)){
				  	echo "<tr class='success'>";
				    	echo "<td style=color:white>$arreglo[0]</td>";
				    	echo "<td style=color:white>$arreglo[1]</td>";
				    	echo "<td style=color:white>$arreglo[2]</td>";
				    	echo "<td style=color:white>$arreglo[3]</td>";
				    	echo "<td style=color:white>$arreglo[4]</td>";
						echo "<td style=color:white>$arreglo[5]</td>";
						echo "<td style=color:white>$arreglo[6]</td>";
						echo "<td style=color:white>$arreglo[7]</td>";
						echo "<td style=color:white>$arreglo[8]</td>";

				    	echo "<td><a href='actualizar.php?id=$arreglo[0]'><img src='images/actualizar.gif' class='img-rounded'></td>";
						echo "<td><a href='admin.php?id=$arreglo[0]&idborrar=2'><img src='images/eliminar.png' class='img-rounded'/></a></td>";
						

						
					echo "</tr>";
				}

				echo "</table>";

					extract($_GET);
					if(@$idborrar==2){
		
						$sqlborrar="DELETE FROM datos WHERE id=$id";
						$resborrar=mysqli_query($mysqli,$sqlborrar);
						echo '<script>alert("REGISTRO ELIMINADO")</script> ';
						//header('Location: proyectos.php');
						echo "<script>location.href='admin.php'</script>";
					}

			?>
			
				  
			  			  
			  
		
		
		<div class="span8">
		
		</div>	
		</div>	
		<br/>
		


		<!--EMPIEZA DESLIZABLE-->
		
		 <!--TERMINA DESLIZABLE-->



		
		
		</div>

		


		

<!--///////////////////////////////////////////////////Termina cuerpo del documento interno////////////////////////////////////////////-->
</div>

	</div>
</div>
<!-- Footer
      ================================================== -->
<hr class="soften"/>
<footer class="footer">

<hr class="soften"/>
<p style="color:white;">&copy; Copyright Cesar Requena y Raimond Rivas <br/><br/></p>
 </footer>
</div><!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="bootstrap/js/jquery-1.8.3.min.js"></script>
    <script src="bootstrap/js/bootstrap.min.js"></script>
	</style>
  </body>
</html>