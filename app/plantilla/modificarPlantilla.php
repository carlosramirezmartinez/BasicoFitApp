<?php
ob_start();
?>

<table>

<form name='ALTA' method="POST" action="index.php?orden=Modificar">

<h1>Modificar cliente</h1>

	
	
</form>


</table>
<input type="button" value=" Volver " size="10" onclick="javascript:window.location='index.php'" >
<?php 
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido

$contenido = ob_get_clean();
include_once "principal.php";

?>