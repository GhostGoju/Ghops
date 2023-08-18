<?php

class cmdConsultarUsuarios
{

    public function execute()
    {
        $u = new usuariosControl();                            //* CREA UN OBJETO DEL CONTROL DE USUARIOS
        $result = $u->listarUsurios();                     //* EJECUTA EL METODO DEL OBJETO (LISTARUSUARIOS)
        print_r(json_encode($result));
    }
}