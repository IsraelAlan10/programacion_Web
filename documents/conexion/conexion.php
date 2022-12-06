<?php
$con = new mysqli("localhost","root","","documents");

if($con->connect_errno){
	printf("fallo en la conexión del tipo %s", $consulta->connect_errno);
}