<?php

include_once 'app/config.php';
include_once 'app/modeloCliente.php'; 
include_once 'app/Cliente.php';

echo "index ok";

$rutasClientes = [
    "Alta"        => "ctlClienteAlta",
    "Detalles"    => "ctlClienteDetalles",
    "Modificar"   => "ctlClienteModificar",
    "Borrar"      => "ctlClienteBorrar"
];