<?php

class cmdActualizarProductos
{
    private $default_request_method = "POST";
    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificarProductos($id, $nombre, $descripcion, $precio, $categoria, $estado_producto, $imagen);
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
                    "message" => "Producto existente con el mismo nombre",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Producto no actualizado",
                    "view" => "productos/listadoProductos"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Producto actualizado correctamente",
                    "view" => "productos/listadoProductos"
                ];
                break;
        }
        return $response;
    }
}
