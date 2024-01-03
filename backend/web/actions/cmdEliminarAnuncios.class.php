<?php

class cmdEliminarAnuncios
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        if (is_array($params))
            $id = $params[0];

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminarAnuncios($id);
        $datos = $u->listarAnuncios();

        switch ($result) {
            case 0:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "faltan datos",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto con el mismo id",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no eliminado",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Producto eliminado correctamente",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
        }
        return $response;
    }
}
