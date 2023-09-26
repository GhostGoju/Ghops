<?php

class cmdEliminarCategorias
{
    private $default_request_method = "GET";
    public function execute($params)
    {
        valid_method($this->default_request_method);

        if (is_array($params))
            $id = $params[0];

        extract($_REQUEST);
        $u = new usuariosControl();
        $result = $u->eliminarCategorias($id);
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
                    "message" => "Categoria con el mismo id",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 2:
                $response = [
                    "result" => "fail",
                    "data" => $datos,
                    "message" => "Categoria no eliminada",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
            case 3:
                $response = [
                    "result" => "success",
                    "data" => $datos,
                    "message" => "Categoria eliminado correctamente",
                    "view" => "categorias/listadoCategorias"
                ];
                break;
        }
        return $response;
    }
}
