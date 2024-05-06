<?php

class ClientesController
{
    public function create()
    {
        $json = array(
            "detalle" => "Estas en la vista registro"
        );
        echo json_encode($json, true);
        return;
    }
}
