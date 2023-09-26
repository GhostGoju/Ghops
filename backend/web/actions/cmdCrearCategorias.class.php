<?php

class cmdCrearCategorias
{
    private $default_request_method = "POST";
    public function execute($params)
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->registrarCategorias($nombre, $descripcion);
        $datos = $u->listarCategorias();

        switch ($result) {
            case 0:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "faltan datos",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 1:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Categoria existente",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Categoria no creada",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Categoria creada correctamente",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
        }
        return $response;
    }
}
