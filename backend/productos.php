<?php
/* @autor Elías Escalante */

require_once "../class/autoload.php";

// Si llegan datos => guardar producto
if (!empty($_POST)) {

    $nombre = trim($_POST["nombre"]);
    $precio = trim($_POST["precio"]);
    $categoria_id = trim($_POST["categoria"]);
    $descripcion = trim($_POST["descripcion"]);

    // Procesar imagen
    $archivo = $_FILES["imagen"];
    $nombreImagen = "";

    if ($archivo["error"] === 0) {
        // Crear nombre único
        $nombreImagen = time() . "_" . $archivo["name"];

        // Ruta ABSOLUTA (infalible)
        $destino = __DIR__ . "/../assets/uploads/" . $nombreImagen;

        move_uploaded_file($archivo["tmp_name"], $destino);
    }

    $producto = new Productos(
        $nombre,
        $precio,
        $categoria_id,
        null,
        $descripcion,
        $nombreImagen
    );

    $producto->guardar();

    header("Location: lista_productos.php");
    exit;

}



// Obtener categorías para el combo
$categorias = Categorias::listar();

require_once "views/productos.php";
