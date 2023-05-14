<?php
ob_start();
?>

<table>

<form name='ALTA' method="POST" action="index.php?orden=Modificar">

<h1>Modificar película</h1>
<input type="hidden" name="codigo" id="cod_peli" readonly value="<?php echo $cli->ID ?>"> 	

    <label for="dni">DNI: </label>
	<input type="text" name="DNI" id="DNI" value="<?php echo $cli->DNI ?>"/>
    </br></br>
	<label for="nombre">Nombre: </label>
	<input type="text" name="nombre" id="nombre" value="<?php echo $cli->nombre ?>"/>
	</br></br>
	<label for="apellido">Apellido: </label>
	<input type="text" name="apellido" name="apellido" value="<?php echo $cli->apellidos ?>"/>
    <label for="fecha_nacimiento">Fecha de nacimiento: </label>
	<input type="text" name="fecha_nacimiento" name="fecha_nacimiento" value="<?php echo $cli->fecha_nacimiento ?>"/>

	</br></br>

	</br></br></br>
	<input type="submit" value="Modificar" />
    </form>
	
	
	
</form>


</table>
<input type="button" value=" Volver " size="10" onclick="javascript:window.location='index.php'" >
<?php 
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido

$contenido = ob_get_clean();
include_once "principal.php";

?>