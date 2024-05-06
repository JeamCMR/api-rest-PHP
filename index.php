<?php
//Requiere el archivo y si no esta incluido lo vuelve a requerir
require_once  "controller/route.controller.php"; 
require_once  "controller/cursos.controller.php";
require_once  "controller/clientes.controller.php";
require_once  "model/clientes.model.php";
require_once  "model/cursos.model.php";


$route = new ControllerRoutes(); //Crea la intancia de la clase 
$route->index();
