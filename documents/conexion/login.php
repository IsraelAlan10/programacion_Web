<?php
$usuarioDado = $_REQUEST["usu"];
$passwordDado = $_REQUEST["password"];

$con = new mysqli("localhost","root","","documents");

if($con->connect_errno){
	printf("fallo en la conexión del tipo %s", $consulta->connect_errno);
}

$consulta = "SELECT * FROM documents.usuario WHERE nick='".$usuarioDado."'";

echo $consulta;

$resultado = $con->query($consulta);

while($row = $resultado->fetch_row()){
	$nombrec = $row[1]." ".$row[2]." ".$row[3];

	$nicknameBD = $row[4];	
	$pasBD = $row[5];	
	$nombrecompleto = $nombrec;
	$idrol = $row[6];
}

if($usuarioDado==$nicknameBD && $idrol==1 && $passwordDado == $pasBD){
	session_start();
	$_SESSION["nombrec"]=$nombrecompleto;
	$_SESSION["administrador"]=true;

	header("Location:http://localhost/documents/administrador/agregarusuario.php");
}

if($usuarioDado==$nicknameBD && $idrol==2 && $passwordDado == $pasBD){
	session_start();
	$_SESSION["nombrec"]=$nombrecompleto;
	$_SESSION["usuario"]=true;

	header("Location:http://localhost/documents/usuario/misasignaciones.php");
}
