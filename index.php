<?php 
require_once  "controller/route.controller.php"; //Requiere el archivo y si no esta incluido lo vuelve a requerir


$route = new ControllerRoutes(); //Crea la intancia de la clase 
$route->index();

?>