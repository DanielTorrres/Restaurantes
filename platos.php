<!DOCTYPE html>
<html>
<head>
	<title>platos</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="css/estilosform.css">
</head>
<body>
	<?php
		include("header.html");
		include("footer.html");
	 ?>
	<div class="container" id="contenedor">
			<h1>FORMULARIO DE PLATOS</h1>
			<from>
				<div class="form-group">
				<label>Codigo</label>
				<input type="number" name="codigo" class="form-control" placeholder="Ingrese el codigo">
			</div>
			<div class="form-group" >
				<label>Nombre Plato</label>
				<input type="text" name="nombre" class="form-control" placeholder="Ingrese el Nombre">
			</div>
			<div class="form-group">
				<label>Precio</label>
				<input type="number" name="codigo" class="form-control" placeholder="Ingrese el Precio">
			</div>
			<div class="form-group">
				<label>Tipo Plato</label>
				<select name="Tipo">
					<option>Regionales</option>
					<option>Mediterraneos</option>
					<option>Criollos</option>
					<option>Orientales</option>
				</select>
			</div>
			<div class="form-group">
				<label>Imagen</label>
				<input type="file" name="Imagen">
			</div>
			<div class="form-group">
				<label>Postre?</label>
				<div class="radio-inline">
					<input type="radio" name="Postre" value="si">SI
				</div>
				<div class="radio-inline">
					<input type="radio" name="Postre" value="no">NO
				</div>
			</div>
			<div class="form-group">
				<input type="submit" name="registrar" value="Registrar" class="btn btn-dark">
				<input type="reset" name="cancelar" value="Cancelar" class="btn btn-warning">
			</div>
			</form>
</body>
</html>