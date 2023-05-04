<!DOCTYPE html>


<html>
<head>
    <meta charset="UTF-8">

    <!--VISTA PRINCIPAL-->
    <title>BasicoFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!--
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    -->
    <link href="./web/style.css" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="web/js/funciones.js"></script>
  
<!--
<body>
    <div id="container">
        <div id="header">
            <h1>BasicoFit</h1>
        </div>
    

        
        < $contenido ?>

    </div>
    <div id="footer">
    <h1>&copy 2023 Carlos Ramirez</h1>
    </div>

</body>
-->
<table>
    <th>Id</th>
    <th>Nombre</th>
    <th>Dni</th>
    <th>Fecha de nacimiento</th>
    <th>Email</th>
	<?php foreach ($clientes as $cli) : ?>
    <tr>
            <td><?= $cli->id ?></td>
            <td><?= $cli->nombre ?></td>
            <td><?= $cli->dni ?></td>
            <td><?= $cli->fecha_nacimiento?></td>
            <td><?= $cli->email ?></td>
    </tr>
		<!--<div class="card" style="width: 18rem;"></div>
			<div class="imagenes"></div>-->
      <?php endforeach; ?>
  </table>
	
</div>

</html>

