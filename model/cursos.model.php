<?php 

require_once "conexion.php";

class ModelCursos{
    static public function index($table){
        $stmt = Conexion::conectar() -> prepare("SELECT * FROM $table"); // Se crea una variable que establece la conexion con la bd, y prepara una sentencia
        $stmt->execute(); //EJECUTA LA sentencia 
        return $stmt->fetchAll(PDO::FETCH_CLASS); // retorna todos los datos de la base de datos solo los nombre de las columnas
        $stmt = null;


    }
}
?>