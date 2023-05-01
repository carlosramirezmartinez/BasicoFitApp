<?php

include_once 'app/config.php';
include_once 'app/modeloCliente.php'; 
include_once 'app/Cliente.php';
include_once 'app/controlerCliente.php';

// Inicializo el modelo 
ModeloClienteDB::Init();


$rutasClientes = [
    "Alta"        => "ctlClienteAlta",
    "Detalles"    => "ctlClienteDetalles",
    "Modificar"   => "ctlClienteModificar",
    "Borrar"      => "ctlClienteBorrar",
    "VerClientes"    => "ctlClienteVerClientes"
];

if (isset($_GET['orden'])){
    // La orden tiene una funcion asociada 
    if ( isset ($rutasClientes[$_GET['orden']]) ){
        $procRuta =  $rutasClientes[$_GET['orden']];
    }
    else {
        // Error no existe función para la ruta
        header('Status: 404 Not Found');
        echo '<html><body><h1>Error 404: No existe la ruta <i>' .
            $_GET['ctl'] .
            '</p></body></html>';
            exit;
    }
}
else {
    $procRuta = "ctlClienteVerClientes";
}


// Llamo a la función seleccionada
$procRuta();


