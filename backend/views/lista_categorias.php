<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Listado de Categorías</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-5">

<h2 class="text-center">Listado de Categorías</h2>

<table class="table table-striped mt-4">
    <thead>
        <tr><th>ID</th><th>Nombre</th></tr>
    </thead>
    <tbody>
        <?php while ($fila = $listado->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $fila['id']; ?></td>
                <td><?php echo $fila['nombre']; ?></td>
            </tr>
        <?php } ?>
    </tbody>
</table>

<div class="text-center mt-4">
    <a href="categorias.php" class="btn btn-success">Agregar Categoría</a>
</div>

<p class="text-center mt-3 text-muted"><strong>Elías Escalante</strong></p>
<a href="../../index.php" class="btn btn-secondary mb-3">Volver al inicio</a>

</body>
</html>
