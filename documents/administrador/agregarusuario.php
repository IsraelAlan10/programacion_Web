<?php 
session_start();
if(@$_SESSION["administrador"]==true){

include 'cabezera.php';
?>

<html>

<div id="nombreusuario">
	Hola administrador <?php echo $_SESSION["nombrec"]?>
</div>

<div class="form" id='form-center'>Agregar Usuario</div>

		<form class="form" method="get" action="agregarusuario_bd.php">
			<label for="nombre">Nombre: </label>
			<input type="text" name="nombre" />
			
			<label for="nombre">Primer Apellido: </label>
			<input type="text" name="primerAp" />
			
			<label for="nombre">Segundo Apellido: </label>
			<input type="text" name="segundoAp" />

			<label for="nombre">Nickname: </label>
			<input type="text" name="nick" />

			<label for="nombre">Contraseña: </label>
			<input type="text" name="clave" />

			<label for="nombre">Tipo Usuario: </label>
			<select name="tipo">
			  <option class="form-usuario" value="1">Administrador</option>
			  <option class="form-usuario" value="2">Usuario</option>			
			</select>

			<input id='registrar' type="submit" value="Registrar Usuario" />
		</form>


<?php include 'pie.php'; ?>

<?php
}
?>