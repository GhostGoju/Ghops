<?php

class View
{
    //* ESTA ES UNA CLASE ABSTRACTA LA CUAL NO CONTIENE OBJETOS SINO FUNCIONES LAS CUALES PODERMOS UTILIZAR INDIVIDUALMENTE
    //* ESTA FUNCION RECIBE VISTAS Y DATA
    // EL ARREGLO DE DATOS ES EL QUE SE ENVIA DESDE LOS CMD(ACCIONES)
    //* FUNCIONAMIENTO

    // 1. EL CMD RETORNA INFORMACION AL DISPACHER (FRONTCONTROLLER) - LO RETORNA A $RESULT (FRONTCONTROLLER PARTE SUPERIOR) -

    public static function render($params = [])    // EL IGUAL Y LOS CORCHETES , SI NO SE MANDAN PARAMETROS ASIGNA EL PARAMETRO DENTRO DE LOS PARENTECIS (BASIO)
    {
        $d = json_decode(json_encode($params));

        if (!is_dir(VIEWS))                             // AQUI PREUNTAMOS SI LA VISTA EXISTE
        {
            showError("El directorio de vistas no existe", true);
        }
        $filename = VIEWS . $params["view"] . "View.php";
        if (!is_file($filename))
            showError("la vista no existe", true);

        require_once $filename;
    }
}
