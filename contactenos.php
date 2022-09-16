<!DOCTYPE html>
<html>
<head>
	<title>Contactenos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/comu.css">
</head>
<body>
	<?php
		include("header.html");
		include("footer.html");
	?>
	<div class="container">
	<form action="">
		<h2>CONTACTO</h2>
		<table class="table table-bordered table-hover responsive nowrap">
		<input type="text" name="nombre" placeholder="Nombre">
		<input type="text" name="correo" placeholder="Correo">
		<input type="text" name="telefono" placeholder="Telefono">
		<textarea name="mensaje" placeholder="escriba aqui su mensaje"></textarea>
		<input type="button" value="ENVIAR =) " id="boton">
		</table>
	</form>
	</div>
</body>
</html>