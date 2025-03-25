<?php

require_once 'Concesionario.php';

$concesionario = new Concesionario();

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $coche = $concesionario->obtenerCochePorId($_GET['id']);
}

?>
<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle Coche</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">Detalle Coche</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="nav-link" href="#"><img src="" alt="logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="row display-flex justify-content-center">
        <div class="col-10 card-cocheDetalle">
            <div id="carouselWithIndicators" class="carousel slide" data-bs-ride="carousel">
                <ol class="carousel-indicators">
                    <?php
                    $listaImagenes = json_decode($coche->imagenes, true);

                    foreach ($listaImagenes as $index => $imagen) : ?>
                        <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="<?= $index ?>" class="active"></li>
                    <?php endforeach; ?>
                </ol>
                <?php

                ?>
                <div class="carousel-inner">
                    <?php foreach ($listaImagenes as $index => $imagen) : ?>
                        <div class="carousel-item <?= $index === 0 ? 'active' : '' ?>">
                            <img src="<?= trim($imagen) ?>" class="d-block w-100" alt="Slide 1">
                        </div>

                    <?php endforeach; ?>
                </div>
                <a class="carousel-control-prev" href="#carouselWithIndicators" role="button" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselWithIndicators" role="button" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </a>
            </div>
        </div>
    </div>


    <div class="modelo-marca container">
        <p class="text-xxl-start font-size-20px"><?=$coche->marca?></p><!-- New -->
        <p class="text-lg-start font-size-15px"><?=$coche->modelo?></p>
    </div>


    <div class="detalle-compra container">
        <div class="row detail-cards-container">
            <div class="col-3">
                <!-- Card 1 - Año -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Año</h5>
                        <p class="card-text"> <?= $coche->anyo ?></p>

                    </div>
                </div>

                <!-- Card 2 - Motor -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Motor</h5>
                        <p class="card-text"><?= $coche->motor ?></p>
                    </div>
                </div>

                <!-- Card 3 - Puertas -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Puertas</h5>
                        <p class="card-text"><?= $coche->puertas ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <!-- Card 4 - Color -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Color</h5>
                        <p class="card-text"><?= $coche->color ?></p>
                    </div>
                </div>

                <!-- Card 5 - Kilometraje -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Kilometraje</h5>
                        <p class="card-text"><?= $coche->kilometros ?></p>
                    </div>
                </div>

                <!-- Card 6 - Precio -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Precio</h5>
                        <p class="card-text"><?= $coche->precio . " €" ?></p>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <!-- Card 7 - Combustible -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Combustible</h5>
                        <p class="card-text"><?= $coche->combustible ?></p>
                    </div>
                </div>

                <!-- Card 8 - Transmisión -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Transmisión</h5>
                        <p class="card-text"><?= $coche->transmision ?></p>
                    </div>
                </div>

                <!-- Card 9 - Seguridad -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Seguridad</h5>
                        <p class="card-text">airbags</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-compra">
            <div class="card-body">
                <h5 class="card-title">Special title treatment</h5>
                <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                <a href="#" class="btn btn-primary">Go somewhere</a>
            </div>

        </div>
    </div>
</body>

</html>