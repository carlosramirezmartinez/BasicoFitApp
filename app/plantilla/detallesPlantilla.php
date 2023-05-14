<?php
include_once 'app/Cliente.php';
ob_start();
?>
<h2> Detalles </h2>
<?php foreach ($clientes as $cli) : ?>
<table>
<tr><td>ID </td><td> <?= $cli->ID ?></td></tr>
<tr><td>DNI </td><td> <?= $cli->DNI ?></td></tr>
<tr><td>Nombre   </td><td>   <?= $cli->nombre ?></td></tr>
<tr><td>Fecha Nacimiento  </td><td>  <?= $cli->fecha_nacimiento ?></td></tr>
<tr><td>E-mail    </td><td>  <?= $cli->email   ?></td></tr>

</table>
<?php endforeach; ?>
<input type="button" value=" Volver " size="10" onclick="javascript:window.location='index.php'" >
<?php 
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido

include_once "principal.php";

?>