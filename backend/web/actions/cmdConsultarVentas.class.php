
<?php

class cmdConsultarVentas
{
    private $default_request_method = "GET";
    public function execute()
    {
        $u = new usuariosControl();
        $result = $u->listarUsurios();

        valid_method($this->default_request_method);

        $response = [
            "result" => "success",
            "data" => $result,
            "message" => "Listado generado"
        ];
        if (!CALL_API == true)
            $response["view"] = "administracion/listadoVentas";
        return $response;
    }
}


// ADMINISTRAR LAS ACCCIONES A REALIZAR DESDE EL MODELO Y EL CONTROL