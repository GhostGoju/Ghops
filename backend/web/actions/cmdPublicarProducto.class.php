<?php

class cmdPublicarProducto
{
    private $default_request_method = "POST";
    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
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
                    "message" => "publicacion ya existente",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no publicado",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Producto publicado Correctamente",
                    "view" => "productos/listadoProductos"
                ];
                break;
        }
        return $response;
    }
}
