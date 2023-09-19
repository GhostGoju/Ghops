<?php

class cmdDefaultCerrarSesion
{
    // private $default_request_method = "GET";
    public function execute($params)
    {
        // valid_method($this->default_request_method);

        session_start();

        session_destroy();

        header("Location: cmdDefaultLogin");
        exit;
    }
}
