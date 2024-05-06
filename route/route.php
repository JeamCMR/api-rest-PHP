<?php

$arrayRoute = explode("/", $_SERVER['REQUEST_URI']); //La variable $_SERVER['REQUEST_URI'] devuelve la url y el metodo explote divide una cadena en este caso la url por el delimitador "/" y la guarda en un array 

// echo "<pre>";
// print_r($arrayRoute);
// echo "<pre>";


if (count(array_filter($arrayRoute)) == 2) { //count devuelve el tamaño de la matriz, array_filter filtra el array bajo un criterio y devuelve el resultado por defecto remueve los elementos vacios
  //Cuando no se hace ninguna peticion a la api muestra el siguiente resultado.
    $json = array(
        "detalle" => "no encontrado"
    );
    echo json_encode($json, true);
    return;
} else {
    if (count(array_filter($arrayRoute)) == 3) {
        //Cuando se pasa algun index a la url al $arrayRutas
        if(array_filter($arrayRoute)[3] == "cursos"){
            if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "POST")//$_SERVER['REQUEST_METHOD'] Valida que tipo de motodo para consumir la api se usa
            { 
                $cursos = new CursosController();
                $cursos->create();
            } 
            else if (isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET")
            {
                $cursos = new CursosController();
                $cursos->index();   
            }
           
        }


        if(array_filter($arrayRoute)[3] == "registro"){
            //Cuando se hace  peticion a la api muestra de registro, muestra este resultado
            if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET")
            {
                $clientes = new ClientesController();
                $clientes -> create();
            }
             
          
        }

    }else 
    {
        if(array_filter($arrayRoute)[3] == "cursos" && is_numeric(array_filter($arrayRoute)[4]) )
        {
            /**Realiza un peticion get para traer devuelta el curso GET */
            if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "GET")
            {
                $curso = new CursosController();
                $curso -> show(array_filter($arrayRoute)[4]);
            }

            /**Realiza un peticion Actualiza el curso PUT */
            if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "PUT")
            {
                $editarCurso = new CursosController();
                $editarCurso -> update(array_filter($arrayRoute)[4]);
            }
             /**Realiza un peticion que elimina el curso DELETE */
             if(isset($_SERVER['REQUEST_METHOD']) && $_SERVER['REQUEST_METHOD'] == "DELETE")
             {
                 $borrarCurso = new CursosController();
                 $borrarCurso -> delete(array_filter($arrayRoute)[4]);
             }
        }
    }
}
