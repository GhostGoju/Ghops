<?php

class cmdDefaultPublicarProducto
{

    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        if (count($params) == 0)
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan Datos"
            ];
        else {
            $id = $params[0];
            $u = new usuariosControl();
            $result = $u->buscarProductos($id);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => "$result",
                    "message" => "",
                    "view" => "productos/publicarProducto"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan datos para publicar",
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "view" => "productos/listadoProductos"
                ];
            }
        }
        if (!CALL_API == true)
            return $response;
    }
}
