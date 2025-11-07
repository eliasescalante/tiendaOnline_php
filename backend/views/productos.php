<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alta de Productos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../../assets/css/estilos.css">
</head>

<body>

    <div class="container mt-5">
        <h2>Formulario de Alta de Productos</h2>
        <?php echo "<p style='color:red'>ESTA ES LA VISTA CORRECTA</p>"; ?>

        <form action="/Api_1/backend/productos.php" method="post" enctype="multipart/form-data">

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Producto</label>
                <input type="text" id="nombre" name="nombre" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="precio" class="form-label">Precio</label>
                <input type="number" id="precio" name="precio" class="form-control" required>
            </div>

            <div class="mb-3">
                <label for="categoria" class="form-label">Categoría</label>
                <select id="categoria" name="categoria" class="form-select" required>
                    <option value="">Seleccionar...</option>

                    <?php while ($fila = $categorias->fetch_assoc()) { ?>
                        <option value="<?php echo $fila['id']; ?>">
                            <?php echo $fila['nombre']; ?>
                        </option>
                    <?php } ?>

                </select>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea id="descripcion" name="descripcion" class="form-control" required></textarea>
            </div>

            <div class="mb-3">
                <label for="imagen" class="form-label">Imagen del Producto</label>
                <input type="file" id="imagen" name="imagen" class="form-control" accept="image/*" required>
            </div>


            <div class="text-center mt-4">
                <button type="submit" class="btn btn-success me-2">Guardar</button>
                <button type="reset" class="btn btn-secondary">Cancelar</button>
            </div>

            <p class="text-center mt-3 text-muted">Tu nombre: <strong>Elías Escalante</strong></p>

        </form>
    </div>
    <a href="../../index.php" class="btn btn-secondary mb-3">Volver al inicio</a>


    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="../../assets/js/validaciones.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../assets/js/main.js"></script>

</body>

</html>