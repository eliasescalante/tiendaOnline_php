<?php
/* @autor Elías Escalante */

require_once "../class/autoload.php";

// Obtener listado de productos
$listado = Productos::listar();

// Pasar listado a la vista
require_once "views/lista_productos.php";
