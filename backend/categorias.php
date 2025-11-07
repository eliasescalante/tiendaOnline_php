<?php
/* @autor Elías Escalante */

require_once "../class/autoload.php";

// Si llegan datos por POST => guardar categoría
if (!empty($_POST)) {

    $nombre = trim($_POST["nombre"]);

    if ($nombre != "") {
        $categoria = new Categorias($nombre);
        $categoria->guardar();

        // Redirigimos al listado de categorías
        header("Location: lista_categorias.php");
        exit;
    }
}

// Si no llega POST => mostrar formulario
require_once "views/categorias.html";
