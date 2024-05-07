<?php 

require_once "conexion.php";

class ModelClientes{
    /**MOSTRAR TODOS LOS REGISTROS DE CLIENTES */
    public static function index($table){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $table"); // Se crea una variable que establece la conexion con la bd, y prepara una sentencia
        $stmt->execute(); //EJECUTA LA sentencia 
        return $stmt->fetchAll(); // retorna todos los datos de la base de datos 
        $stmt = null;
    }
}

?>