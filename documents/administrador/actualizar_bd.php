<?php
$id = $_GET['idu'];
$nombrenuevo = $_GET['nom'];
$primerapellidonuevo = $_GET['pa'];
$segundopellidonuevo = $_GET['sa'];
$nicknuevo = $_GET['nick'];
$clavenueva = $_GET['clave'];
$tiponuevo = $_GET['tipo'];

include "../conexion/conexion.php";


	$consulta = "
	UPDATE 
	   usuario 
	SET
	   nombre ='".$nombrenuevo."', 
	   primer_apellido = '".$primerapellidonuevo."',
	   segundo_apellido = '".$segundopellidonuevo."',
	   nick = '".$nicknuevo."',
	   clave = '".$clavenueva."',
	   tipo = ".$tiponuevo."
	WHERE 
	   id = '".$id."'";

	echo $consulta;

    if(mysqli_query($con,$consulta)){
		echo "
		<script>confirm('Usuario Actualizado');</script>
		<meta http-equiv='refresh' content='0;url=http://localhost/documents/administrador/consultar.php'>
		";
	}