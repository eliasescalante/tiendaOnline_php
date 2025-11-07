<?php
/* @autor Elías Escalante */

require_once "../class/autoload.php";

// Obtener listado completo
$listado = Categorias::listar();

// Pasar listado a la vista
require_once "views/lista_categorias.php";
