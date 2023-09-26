<?php

class cmdDefaultEditarCategorias
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
                "message" => "Faltan parametros"
            ];
        else {
            $id = $params[0];
            $u = new usuariosControl();
            $result = $u->buscarCategorias($id);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "",
                    "view" => "categorias/editarCategorias"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan datos",
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "view" => "categorias/editarCategorias"
                ];
            }
        }
        if (!CALL_API == true)
            return $response;
    }
}
