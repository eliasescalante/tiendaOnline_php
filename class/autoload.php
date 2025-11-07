<?php
/* @autor Elías Escalante */

spl_autoload_register(function($className) {
    $ruta = __DIR__ . "/" . $className . ".php";

    if (file_exists($ruta)) {
        require_once $ruta;
    } else {
        die("No se pudo cargar la clase: $className");
    }
});
