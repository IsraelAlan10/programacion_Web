<?php

include "../conexion/conexion.php";

$nombreDado = $_REQUEST["nombre"];
$primerapDado = $_REQUEST["primerAp"];
$segundoapDado = $_REQUEST["segundoAp"];
$nickDado = $_REQUEST["nick"];
$claveDada = $_REQUEST["clave"];
$tipoDado = $_REQUEST["tipo"];


$consulta = "
INSERT INTO 
	documents.usuario (
		nombre, 
		primer_apellido, 
		segundo_apellido, 
		nick, 
		clave, 
		tipo) 
VALUES (
		'".$nombreDado."', 
		'".$primerapDado."', 
		'".$segundoapDado."', 
		'".$nickDado."', 
		'".$claveDada."',
		".$tipoDado."
		)";

if(mysqli_query($con,$consulta)){
			echo "
		<script>confirm('Usuario Actualizado')</script>
		<meta http-equiv='refresh' content='0;url=http://localhost/documents/administrador/consultar.php'>
		";

		}else{
			echo "registro rechazado";
		}
