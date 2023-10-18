<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

class cmdAutenticar
{
    private $default_request_method = "POST";

    public function execute()
    {
        valid_method($this->default_request_method);
        extract($_REQUEST);
        $_SESSION['email'] = $_REQUEST['email'];
        $_SESSION['password'] = $_REQUEST['password'];
        $u = new usuariosControl();
        $result = $u->autenticar($email, $password);

        if (is_array($result) && $result['estado'] == 2) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario inactivo",
                "view" => "login"
            ];
        } elseif (is_array($result)) {
            // Usuario autenticado y activo, permite el acceso.
            $_SESSION['email'] = $email;
            $_SESSION['nombre'] = $result['nombre'];
            $_SESSION['rol'] = $result['rol'];
            $_SESSION['estado'] = $result['estado'];

            $response = [
                "result" => "success",
                "data" => $result,
            ];

            if ($_SESSION['rol'] == 2 || $_SESSION['rol'] == 1) {
                header("Location: cmdDefaultHome");
                exit;
            }
        } elseif ($result == 0) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Faltan datos",
                "view" => "login"
            ];
        } elseif ($result == 1) {
            $response = [
                "result" => "fail",
                "data" => "",
                "message" => "Usuario inválido",
                "view" => "login"
            ];
        }
        return $response;
    }
}
