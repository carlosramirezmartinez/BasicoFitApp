<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">

    <!--VISTA PRINCIPAL-->
    <title>BasicoFit</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="web/css/default.css" rel="stylesheet" type="text/css" />
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
    <h1>&copy 2023 Carlos Ramirez 2ºDAW</h1>
    </div>

</body>
-->

<div class="tarjetas">
	<?php foreach ($clientes as $cli) : ?>
		<!--<div class="card" style="width: 18rem;"></div>
			<div class="imagenes"></div>-->
		

        <div class="card" style="width: 23rem;">
  <div class="col">
    <div class="card">
      <img src="<?= $cli->id ?> class="card-img-top">
      <div class="card-body">
      <h2 class="card-title"><?= $cli->nombre ?></h2>
      <p class="card-text">
				<h5>DNI: <?= $cli->dni ?></h5>
				</p>
				<p class="card-text">
				<h5>Cliente: <?= $cli->nombre?><?=  $cli->apellidos?></h5>
				</p>
				<p class="card-text">
				<h5>Fecha de nacimiento: <?= $cli->fecha_nacimiento?></h5>
				</p>
				<p class="card-text">
				<h5>Email: <?= $cli->email ?></h5>
				</p>

      </div>
    </div>
  </div>
  
	<?php endforeach; ?>
</div>

</html>
