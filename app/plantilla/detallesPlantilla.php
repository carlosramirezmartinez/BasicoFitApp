<?php
ob_start();
?>
<h2> Detalles </h2>
<table>
<tr><td>ID </td><td> <?= $cli->ID ?></td></tr>
<tr><td>DNI </td><td> <?= $cli->DNI ?></td></tr>
<tr><td>Nombre   </td><td>   <?= $cli->nombre ?></td></tr>
<tr><td>Director  </td><td>  <?= $cli->fecha_nacimiento ?></td></tr>
<tr><td>Genero    </td><td>  <?= $cli->email   ?></td></tr>

</table>
<input type="button" value=" Volver " size="10" onclick="javascript:window.location='index.php'" >
<?php 
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido

$contenido = ob_get_clean();
include_once "principal.php";

?>