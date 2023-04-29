<?php
//MODELO BASE DE DATOS
include_once 'config.php';
include_once 'Cliente.php';

//Consultas SQL, pruebas previas con phpmyadmin
class ModeloUserDB{

    private static $dbh = null;
    private static $consulta_cliente = "Select * from clientes where ID = ?, DNI = ?";

    //Alta, modificar y borrar
    private static $insert_cliente   = "Insert into clientes (DNI, nombre, apellidos, fecha_nacimiento, email, ciudad)" .
        " VALUES ( ?, ?, ?, ?, ?, ?)";
    private static $update_cliente  = "UPDATE clientes set DNI =?, nombre=?, apellidos=?, fecha_nacimiento=?, email=?, ciudad=? WHERE ID=?";
    private static $delete_cliente  = "Delete from clientes where ID = ?";


}

/**
 * Funciones posteriores
 * 
 * GetOne, GetAll, Clientes borrado, alta, modify, etc
 * 
 */
