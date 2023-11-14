
<?php

class cmdConsultarInventario
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
            $response["view"] = "administracion/listadoInventario";
        return $response;
    }
}



// ADMINISTRAR LAS ACCCIONES A REALIZAR DESDE EL MODELO Y EL CONTROL