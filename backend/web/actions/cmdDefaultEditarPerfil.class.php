<?php

class cmdDefaultEditarPerfil
{
    public function execute()
    {
        $response = [
            "result" => "success",
            "data" => "",
            "message" => "",
            "view" => "usuarios/editarPerfil"
        ];
        return $response;
    }
}
