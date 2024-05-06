<?php

class CursosController
{

    public function index()
    {
        $cursos = ModelCursos::index("cursos");
        //Cuando se hace  peticion a la api muestra de cursos, muestra este resultado
        $json = array(
            "detalle" => $cursos,
        );
        echo json_encode($json, true);
        return;
    }
    public function create(){
        $json = array(
            "detalle" => "Estas en la vista create cursos"
        );
        echo json_encode($json, true);
        return;
    }

    public function show($id){
        $json = array(
            "detalle" => "Este es el curso con el id: ". " ". $id
        );
        echo json_encode($json, true);
        return;
    }
    public function update($id){
        $json = array(
            "detalle" => "El curso con el id: ".$id ." Fue actualizado"
        );
        echo json_encode($json, true);
        return;
    }

    public function delete($id){
        $json = array(
            "detalle" => "El curso con el id: ".$id ." Fue eliminado"
        );
        echo json_encode($json, true);
        return;
    }
}
