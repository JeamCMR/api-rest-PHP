<?php

$arrayRoute = explode("/", $_SERVER['REQUEST_URI']); //La variable $_SERVER['REQUEST_URI'] devuelve la url y el metodo explote divide una cadena en este caso la url por el delimitador "/" y la guarda en un array 

echo "<pre>";
print_r($arrayRoute);
echo "<pre>";


if (count(array_filter($arrayRoute)) == 2) { //count devuelve el tamaño de la matriz, array_filter filtra el array bajo un criterio y devuelve el resultado por defecto remueve los elementos vacios
    $json = array(
        "detalle" => "no encontrado"
    );
    echo json_encode($json, true);
    return;
} else {
    if (count(array_filter($arrayRoute)) == 3) {
        $json = array("detalle" => "Estas en la vista cursos");
    }
}
