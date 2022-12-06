<?php
$idusu = $_GET['id'];

include "../conexion/conexion.php";


	$consulta = "DELETE FROM usuario WHERE id='".$idusu."'";

	if(mysqli_query($con,$consulta)){
		echo "
		<script>confirm('Usuario Eliminado');</script>
		<meta http-equiv='refresh' content='0;url=http://localhost/documents/administrador/consultar.php'>
		";
	}