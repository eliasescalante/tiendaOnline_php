<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8" />
    <title>Home - Tienda</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/css/home.css" />
</head>

<body class="bg-light">

    <!-- HEADER -->
    <header class="header shadow">
        <div class="container py-3 d-flex justify-content-between align-items-center flex-wrap gap-3">

            <div class="d-flex align-items-center gap-3">
                <img src="https://w1.pngwing.com/pngs/277/169/png-transparent-hacker-logo-bee-barranco-district-carabayllo-district-hackerspace-technology-maker-culture-lima.png"
                    alt="Logo" width="60" class="logo-img" />

                <div>
                    <h1 class="site-title m-0">Mi Tienda</h1>
                    <small class="text-secondary">Elías Escalante</small>
                </div>
            </div>

            <nav class="d-flex flex-wrap gap-2">
                <a href="backend/categorias.php" class="btn btn-dark">Alta Categorías</a>
                <a href="backend/productos.php" class="btn btn-dark">Alta Productos</a>
                <a href="backend/lista_categorias.php" class="btn btn-outline-dark">Ver Categorías</a>
                <a href="backend/lista_productos.php" class="btn btn-outline-dark">Ver Productos</a>
            </nav>

        </div>
    </header>


    <!-- PRODUCT GRID -->
    <main class="container py-4">
        <div class="row g-4">

            <?php while ($p = $productos->fetch_assoc()) { ?>

                <div class="col-10 col-sm-6 col-md-4 col-lg-3">
                    <div class="card product-card shadow-sm border-0">

                        <div class="product-img-wrapper">
                            <img src="assets/uploads/<?php echo $p['imagen']; ?>"
                                class="card-img-top product-img"
                                alt="<?php echo $p['nombre']; ?>" />
                        </div>

                        <div class="card-body">
                            <h5 class="card-title fw-semibold">
                                <?php echo $p['nombre']; ?>
                            </h5>

                            <p class="mb-1 text-muted small">
                                <strong class="text-dark">Categoría:</strong>
                                <?php echo $p['categoria']; ?>
                            </p>

                            <p class="card-text small">
                                <?php echo $p['descripcion']; ?>
                            </p>
                        </div>

                    </div>
                </div>

            <?php } ?>

        </div>
    </main>


    <!-- FOOTER -->
    <footer class="footer text-center mt-5 py-4">
        <p class="m-0">
            Proyecto para la materia de Programación Web
            <br>
            <span class="text-secondary">Desarrollado en PHP | HTML | CSS | JS</span>
            <br>
            <strong>Elías Escalante - 2025</strong>
        </p>
    </footer>

</body>

</html>