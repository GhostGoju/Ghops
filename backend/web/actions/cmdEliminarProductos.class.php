<?php

class cmdEliminarProductos
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        if (is_array($params))
            $id = $params[0];

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminarProductos($id);
        $datos = $u->listarProductos();

        switch ($result) {
            case 0:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "faltan datos",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto con el mismo id",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no eliminado",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Producto eliminado correctamente",
                    "view" => "productos/listadoProductos"
                ];
                break;
        }
        return $response;
    }
}
