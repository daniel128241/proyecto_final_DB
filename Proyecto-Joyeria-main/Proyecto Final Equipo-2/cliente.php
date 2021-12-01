<?php include('header.php')?>

<?php include('bd.php')?>
<html>
<link rel="stylesheet" type="text/css" href="estilo.css">

<body>
<h2>si quieres contactar con nosotros o hacer una compra por favor rellena el siguiente formulario</h2>
	<div class="container">
		<form action="insertar.php" method="POST" class="formulario">
		<h2>Registro de compra</h2>
			<input type="text" name="name" placeholder="Nombre" autofocus>
			<input type="text" name="lastname" placeholder="Apellido" autofocus>
			<input type="text" name="cel" placeholder="Telefono" autofocus>
			<input type="email" name="email" placeholder="Correo" autofocus>
			<input type="tetx" name="edad" placeholder="Edad" autofocus>
			<input type="text" name="prod" placeholder="Producto" autofocus>
			<br><br>
			<center>
			<div class="formaVenta">
				<input type="radio" name="venta" id="mayoreo" value="Mayoreo">
				<label for="mayoreo">Mayoreo</label>

				<input type="radio" name="venta" id="menudeo" value="Menudeo">
				<label for="menudeo">Menudeo</label>
			</div>
			</center>
			<input type="submit" name="enviar">
		</form>
	</div>
	<?php include("footer.php")?>
</body>
</html>

