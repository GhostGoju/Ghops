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
        exit();
}
