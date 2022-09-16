<!DOCTYPE html>
<html>
<head>
	<title>Galeria</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/estilostabla.css">
</head>
<body>
	<?php
		include("header.html");
		include("footer.html");
	?>
	<div class="container">
		<h1>GALERÍA DE IMÁGENES</h1>
		
		<table class="table table-bordered table-hover responsive nowrap">
			<tbody>
				<tr>
					<td><img src="img/1.jpg" class="imgen"></td>
					<td><img src="img/5.jpg" class="imgen"></td>
					<td><img src="img/2.jpg" class="imgen"></td>
					<td><img src="img/7.jpg" class="imgen"></td>

				</tr>
				<tr class="text-light bg-dark">
					<td class="text-center">***Postres =)***</td>
					<td class="text-center">***Esquisitos platos***</td>
					<td class="text-center">***Una hamburguesa***</td>
					<td class="text-center">***Carne de reds =)***</td>
				</tr>
				<tr>
					<td><img src="img/3.jpg" class="imgen"></td>
					<td><img src="img/4.jpg" class="imgen"></td>
					<td><img src="img/6.jpg" class="imgen"></td>
					<td><img src="img/8.jpg" class="imgen"></td>
				</tr>
				<tr class="text-light bg-dark">
					<td class="text-center">***Platos de buena calidad =)***</td>
					<td class="text-center">***Pizza Kawaii***</td>
					<td class="text-center">***Mariscos***</td>
					<td class="text-center">***Lomo saltado***</td>
				</tr>
			</tbody>
		</table>
	</div>
</body>
</html>