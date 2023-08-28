<?php

// ESTE DOCUMENTO CONTIENE TODAS LAS FUNCIOENS DE AYUDAS COMO MANEJO DE ERRORES

function showError($error, $abort = false)
{
    $data =
        [
            "status" => "fail",
            "message" => $error
        ];
    print_r(json_encode($data));
    if ($abort)
        die();
}

function valid_method($method)
{
    $request_server_method = isset($_SERVER["REQUEST_METHOD"]) ? $_SERVER["REQUEST_METHOD"] : null;
    if ($request_server_method != $method) {
        showError("Peticion invalida :(", true);
    }
}