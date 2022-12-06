<?php 
session_start();
if(@$_SESSION["usuario"]==true){
?>

<html>

Hola usuario <?php echo $_SESSION["nombrec"]?>



</html>


<?php
}
?>