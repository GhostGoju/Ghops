<?php

 //Las rutas de los directorios
 define("IS_LOCAL","localhost");
  define("DS",DIRECTORY_SEPARATOR);
 define("ROOT", getcwd().DS);
 define("ACTIONS", ROOT."webhttp/actions".DS);
 define("VIEWS", ROOT."webhttp/vista".DS);
 define("DEFAULT_ACTION", "cmdDefaultLogin");
 define("DEFAULT_VIEW", "login");
 define("INCLUDES_TEMPLATE", VIEWS ."includes". DS);
 define("APP_VERSION", "1.0.4");
 define("PUBLIC_PATH", ROOT."public".DS);
 define("PREPROS",false);

// Puerto y la URL del sitio
define('BASEPATH', IS_LOCAL ? '/miApi/' : '/'); // Debe ser cambiada a la ruta de tu proyecto en producción y desarrollo
define('PROTOCOL', isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http"); // Detectar si está en HTTPS o HTTP
define('HOST', $_SERVER['HTTP_HOST'] === 'localhost' ? (PREPROS ? 'localhost:' . PORT : 'localhost') : $_SERVER['HTTP_HOST']); // Dominio o host localhost.com tudominio.com
define('REQUEST_URI', $_SERVER["REQUEST_URI"]); // Parámetros y ruta requerida
define('URL', PROTOCOL . '://' . HOST . BASEPATH); // URL del sitio
define('CUR_PAGE', PROTOCOL . '://' . HOST . REQUEST_URI); // URL actual incluyendo parámetros get

//print_r(URL);

 ?>
