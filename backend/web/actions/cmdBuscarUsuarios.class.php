<?php

class cmdBuscarUsuarios
{

    public function execute()
    {
        extract($_REQUEST);

        $u = new usuariosControl();
        $result = $u->buscarUsuarios($id);
        if (is_array($result)) {
            $response = [
                "result" => "ok",
                "data" => $result,
                "message" => "Usuario encontrado"
            ];
        }
        if ($result == 0) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Faltan datos"
            ];
        }
        if ($result == 1) {
            $response = [
                "result" => "bad",
                "data" => "",
                "message" => "Usuario no encontrado"
            ];
        }
        print_r(json_encode($response));
    }
}
