<?php

class ClientesController
{
    public function create($datos)
    {
        /**VALIDAR CAMPO NOMBRE */
        if (isset($datos["nombre"])  && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $datos["nombre"])) {
            $json = array(  
                "status" => "404",
                "detalle" => "Error en el nombre Solo se permite letras"
            );
            echo json_encode($json, true);
        
            return;
        }
          /**VALIDAR CAMPO APELLIDO */
          if (isset($datos["apellido"])  && !preg_match('/^[a-zA-ZáéíóúÁÉÍÓÚñÑ\s]+$/', $datos["apellido"])) {
            $json = array(
                "status" => "404",
                "detalle" => "Error en el apellido Solo se permite letras"
            );
            echo json_encode($json, true);
        
            return;
        }
         /**VALIDAR CAMPO Correo */
         if (isset($datos["email"])  && !preg_match('/^[A-z0-9\\._-]+@[A-z0-9][A-z0-9-]*(\\.[A-z0-9_-]+)*\\.([A-z]{2,6})$/', $datos["email"])) {
            $json = array(
                "status" => "404",
                "detalle" => "Error en el correo fromato incorrecto"
            );
            echo json_encode($json, true);
        
            return;
        }
        /**Validar Email repetido */
        $clientes = ModelClientes::index("clientes");
        foreach ($clientes as $key => $value) {
           if($value["email"] == $datos["email"]){
            $json = array(
                "status" => "200",
                "detalle" => "Email ha registrar ya existe"
            );
            echo json_encode($json, true);
           }
        }
      
       
    }
}
