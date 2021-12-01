<?php 

include("bd.php");

if (isset($_POST['enviar'])){
	$name = $_POST['name'];
	$lastn = $_POST['lastname'];
	$cel = $_POST['cel'];
	$email = $_POST['email'];
	$years = $_POST['edad'];
	$pro = $_POST['prod'];
	$venta = $_POST['venta'];
	$fechareg = date("d/m/y");
	$query = "INSERT INTO ventas(nombre, apellido, telefono, correo, edad, producto, tipo_venta, fecha_reg) 
	VALUES ('$name','$lastn','$cel','$email','$years','$pro','$venta','$fechareg')";
	$result = mysqli_query($conex, $query);
	if ($result){
		header('Location: consulta.php');
	}
}
?>