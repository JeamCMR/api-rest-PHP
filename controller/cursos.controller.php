<?php

class CursosController
{

    public function index()
    {
        //Cuando se hace  peticion a la api muestra de cursos, muestra este resultado
        $json = array(
            "detalle" => "Estas en la vista cursos"
        );
        echo json_encode($json, true);
        return;
    }
}
