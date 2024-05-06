<?php
require_once  "controller/route.controller.php"; //Requiere el archivo y si no esta incluido lo vuelve a requerir
require_once  "controller/cursos.controller.php";
require_once  "controller/clientes.controller.php";

$route = new ControllerRoutes(); //Crea la intancia de la clase 
$route->index();
