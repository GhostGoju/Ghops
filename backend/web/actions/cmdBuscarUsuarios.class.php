<?php

class cmdBuscarUsuarios
{

    public function execute($params)
    {
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
            $result = $u->buscarUsuarios($id);
            if (is_array($result)) {
                $response = [
                    "result" => "success",
                    "data" => $result,
                    "message" => "Usuario encontrado"
                ];
            }
            if ($result == 0) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Faltan datos"
                ];
            }
            if ($result == 1) {
                $response = [
                    "result" => "fail",
                    "data" => "",
                    "message" => "Usuario no encontrado"
                ];
            }
        }
        if (!CALL_API == true)
            $response["view"] = "usuarios/edit";                         //* CUANDO LLAMO A BUSCAR USUARIOS, PREGUNTO SE DENTRO DE ESTE VIENE API O WEB Y DEPENDIENDO DEL LLAMADO EJECUTO UNA U OTRA ACCION
        return $response;
    }
}
