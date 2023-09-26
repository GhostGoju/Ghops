<?php

class cmdActualizarCategorias
{
    private $default_request_method = "POST";
    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->modificarCategorias($id, $nombre, $descripcion);
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
                    "message" => "Categoria  existente con el mismo nombre",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Categoria no actualizada",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Categoria actualizada correctamente",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
        }
        return $response;
    }
}
