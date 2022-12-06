<?php 
session_start();
if(@$_SESSION["administrador"]==true){
?>

<html>

<?php include 'cabezera.php'; ?>
<div id="nombreusuario" >
	Hola administrador <?php echo $_SESSION["nombrec"]?>
</div>

<div class="form" id='form-center'>Consultar usuarios</div>

<center>

<?php 
include "../conexion/conexion.php";

	$consulta = "SELECT * FROM usuario";

	$result = $con->query($consulta);

printf("<table border='2'>
		<thead>
		<tr>
		<th>nombre</th><th>primer apellido</th><th>segundo apellido</th><th>nickname</th><th>contraseña</th><th>tipo de usuario</th><th>opción</th><th>opción</th>
		</tr>
		</thead>		
		");
	while($obj = $result->fetch_object()){
		$tipousu = 0;
		if($obj->tipo==1){
			$tipousu = "administrador";
		}else{
			$tipousu = "usuario";
		}


		printf("<tr>");
		printf("<td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td><td>%s</td>
<td>
	<form class='formtabla' action='editarusu.php' method='get'>
	<input  type='hidden' name='id' value='%s'>
	<button class='btntabla' type=submit>modificar</button>
	</form>
</td>

<td>
	<form class='formtabla' action='borrarusu.php' method='get'>
	<input type='hidden' name='id' value='%s'>
	<button  type=submit>borrar</button>
	</form>
</td>

		",$obj->nombre,
        $obj->primer_apellido,
        $obj->segundo_apellido,
        $obj->nick,
        $obj->clave,
        $tipousu,
        $obj->id, 
        $obj->id);
		printf("</tr>");
	}
printf("</table>");

include 'pie.php'; ?>
</center>

<?php
}
?>