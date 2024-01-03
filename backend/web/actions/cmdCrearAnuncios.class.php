<?php

class cmdCrearAnuncios
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarAnuncios($nombre, $descripcion, $estado);
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
                    "message" => "Categoria existente",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Categoria no creada",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Categoria creada correctamente",
                    "view" => "administracion/listadoAnuncios"
                ];
                break;
        }
        return $response;
    }
}
