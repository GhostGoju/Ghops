<?php

// Aqui se definen las rutas de los directorios

define("IS_LOCAL","localhost");                   // ESTA CONSTANTE LE DECIMOS QUE ESTAMOS EN LOCALHOST
define("DS",DIRECTORY_SEPARATOR);                 // CON ESTA ACCION AUTOMATICA NOS PONE EL SEPARADOR CORRESPONDIENTE A WINDOWS
define("ROOT" , getcwd(). DS);                    // AQUI LE DECIMOS A PHP DONDE SE ESTA EJECUTANDO NUESTRO PROYECTO
define ("ACTIONS", ROOT."web/actions".DS);           // SE DEFINE UNA CONSTANTE LLAMADA ACTIONS EN LA CUAL LA DEFINIMOS CON ROOT QUE ES LA DIRECCION DE NUESTRO PROYECTO
                                                      // Y LE AGREGAMOS LAS CARPETAS A LAS CUALES DEBE ACCEDER .POR ULTIMO EL DS ES EL SEPARADOR DE DIRECTORIOS
define ("VIEWS", ROOT."web/vistas".DS);        // ESTA PARTE UBICA LAS RUTAS DE LAS VISTAS DE LA PAGINA WEB
define ("DEFAULT_ACTION", "cmdDefaultLogin");         // ERROR POR DEFECTO
define ("INCLUDES_TEMPLADE", VIEWS . "INCLUDES" .DS);         // CARGA DE TEMPLADES PARA LIMPIAR CODIGO EN EL HTML
define ("APP_VERSION", "1.0");         // AQUI SE ACTUALIZA LA VISTA DE LA VERSION DEL SISTEMA

 define("PUBLIC_PATH", ROOT."public".DS);
 define("PREPROS",false);

// Puerto y la URL del sitio
define('BASEPATH', IS_LOCAL ? '/SENA/backend/' : '/'); // Debe ser cambiada a la ruta de tu proyecto en producción y desarrollo
define('PROTOCOL', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"); // Detectar si está en HTTPS o HTTP
define('HOST', $_SERVER['HTTP_HOST'] === 'localhost' ? (PREPROS ? 'localhost:' . PORT : 'localhost') : $_SERVER['HTTP_HOST']); // Dominio o host localhost.com tudominio.com
define('REQUEST_URI', $_SERVER["REQUEST_URI"]); // Parámetros y ruta requerida
define('URL', PROTOCOL . '://' . HOST . BASEPATH); // URL del sitio
define('CUR_PAGE', PROTOCOL . '://' . HOST . REQUEST_URI); // URL actual incluyendo parámetros get


?>
