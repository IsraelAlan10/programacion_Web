<?php 
session_start();
if(@$_SESSION["administrador"]==true){
?>

<html>

<?php include 'cabezera.php'; ?>
<div id="nombreusuario">
	Hola administrador <?php echo $_SESSION["nombrec"]?>
</div>


<?php

$idusu = $_GET['id'];


include "../conexion/conexion.php";

	$consulta = "SELECT * FROM documents.usuario WHERE id='".$idusu."'";
	$result = $con->query($consulta);
	$obj = $result->fetch_object();
?>

<div class="form" id="form-center">Editar Usuario</div>

		<form class ="form" method="get" action="actualizar_bd.php">

			<input type="hidden" name="idu" value='<?php echo $idusu; ?>'>

			<label for="nombre">Nombre</label>
			<input class="form-usuario" type="text" name="nom" value='<?php echo $obj->nombre; ?>' />
			
			<label for="nombre">Primer Apellido</label>
			<input class="form-usuario" type="text" name="pa" value='<?php echo $obj->primer_apellido; ?>' />
			
			<label for="nombre">Segundo Apellido</label>
			<input class="form-usuario" type="text" name="sa" value='<?php echo $obj->segundo_apellido; ?>'/>

			<label for="nombre">Nickname</label>
			<input class="form-usuario" type="text" name="nick" value='<?php echo $obj->nick; ?>' />

			<label for="nombre">Contraseña</label>
			<input class="form-usuario" type="text" name="clave" value='<?php echo $obj->clave; ?>' />

			<label for="nombre">Tipo Usuario</label>

			<select name="tipo">
				<?php 
				if($obj->tipo==1){
					echo "<option value=1 selected>Administrador</option>";
				}else{
					echo "<option value=1>Administrador</option>";
				}

				if($obj->tipo==2){
					echo "<option value=2 selected>Usuario</option>";
				}else{
					echo "<option value=2>Usuario</option>";
				}
				?>
			</select>


			<input type="submit" value="Actualizar Usuario" />
		</form>


<?php include 'pie.php'; ?>



<?php
}

?>

