<?php
//MODELO BASE DE DATOS
include_once 'config.php';
include_once 'Cliente.php';

//Consultas SQL, pruebas previas con phpmyadmin
class ModeloClienteDB{

    private static $dbh = null;
    private static $consulta_cliente = "Select * from clientes where ID = ?";

    //Alta, modificar y borrar
    private static $insert_cliente   = "Insert into clientes (DNI, nombre, apellidos, fecha_nacimiento, email, ciudad)" .
        " VALUES ( ?, ?, ?, ?, ?, ?)";
    private static $update_cliente  = "UPDATE clientes set DNI =?, nombre=?, apellidos=?, fecha_nacimiento=?, email=?, ciudad=? WHERE ID=?";
    private static $delete_cliente  = "Delete from clientes where ID = ?";





//Inicio conexion con la BD     
public static function init(){  
    if (self::$dbh == null){
        try {
            // Cambiar  los valores de las constantes en config.php
            $dsn = "mysql:host=".DBSERVER.";dbname=".DBNAME.";charset=utf8";
            self::$dbh = new PDO($dsn,DBUSER,DBPASSWORD);
            // Si se produce un error se genera una excepción;
            self::$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e){
            echo "Error de conexión ".$e->getMessage();
            exit();
        }
        
    }
    
}

/**
 * Funciones posteriores
 * 
 * GetOne, GetAll, Clientes borrado, alta, modify, etc
 * 
 */

// Tabla de objetos con los cliente
public static function GetAll ():array{
    // Genero los datos para la vista de index
    
    $stmt = self::$dbh->query("select * from clientes");
    
    $tclientes = [];
    $stmt->setFetchMode(PDO::FETCH_CLASS, 'Cliente');
    while ( $clientes = $stmt->fetch()){
        $tclientes[] = $clientes;       
    }
    return $tclientes;
}

//Borrar cliente

public static function ClienteDel($id)
{
    $stmt = self::$dbh->prepare(self::$delete_cliente);
    $stmt->bindValue(1, $id);
    $stmt->execute();
    if ($stmt->rowCount() > 0) {
        return true;
    }
    return false;
}

//Modificar cliente
public static function ClienteMod($id)
{

    
}
}//Fin clase