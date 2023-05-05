<?php
// GESTION DE CLIENTES
include_once 'config.php';
include_once 'modeloCliente.php'; 
include_once 'Cliente.php';

    function ctlClienteAlta(){
        die(" No implementado.");
        //require_once './app/plantilla/altaPlantilla.php';
    }
    
    function ctlClienteModificar(){
        if ( isset($_GET['codigo'])){
            $codigo = $_GET['codigo'];
            include_once 'plantilla/modificarPlantilla.php';
        }
         
    }

    function ctlClienteBorrar(){
        
    $codigo = $_GET['id'];
    $clientes = ModeloClienteDB::ClienteDel($codigo);


    header('Location: index.php');
         //require_once './app/plantilla/borrarPlantilla.php';
    }

    function ctlClienteDetalles(){
        die(" No implementado.");
         //require_once './app/plantilla/detallesPlantilla.php';
    }

    function ctlClienteVerClientes(){
          // Obtengo los datos del modelo
        $clientes = ModeloClienteDB::GetAll();
        // Invoco la vista 
        include_once 'plantilla/verclientes.php';

    }

    