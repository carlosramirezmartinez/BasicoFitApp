<?php
include_once 'app/Cliente.php';
// Guardo la salida en un buffer(en memoria)
// No se envia al navegador
ob_start();
$auto = $_SERVER['PHP_SELF'];

?>

<!-- Ver divs y estructura html -->

<?php foreach ($clientes as $cli) : ?>

    <tr>
		<td><?= $cli->id ?></td>
		<td><?= $cli->dni ?></td>
		<td><?= $cli->nombre ?></td>
		<td><?= $cli->apellidos ?></td>
    <td><?= $cli->fecha_nacimiento ?></td>
    <td><?= $cli->email ?></td>
    <td><?= $cli->ciudad?></td>
			

<?php endforeach; ?>

<?php
// Vacio el bufer y lo copio a contenido
// Para que se muestre en div de contenido de la página principal
$contenido = ob_get_clean();
include_once "principal.php";

?>