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
            <a class="nav-link" href="#">Logo</a>
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
                    <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="0" class="active"></li>
                    <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="1"></li>
                    <li data-bs-target="#carouselWithIndicators" data-bs-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="images/car.jpg" class="d-block w-100" alt="Slide 1">
                    </div>
                    <div class="carousel-item">
                        <img src="images/car.jpg" class="d-block w-100" alt="Slide 2">
                    </div>
                    <div class="carousel-item">
                        <img src="images/car.jpg" class="d-block w-100" alt="Slide 3">
                    </div>
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

    <div class="detalle-compra container">
        <div class="row detail-cards-container">
            <div class="col-3">
                <!-- Card 1 - Año -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Año</h5>
                        <p class="card-text">2021</p>
                    </div>
                </div>

                <!-- Card 2 - Motor -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Motor</h5>
                        <p class="card-text">2.0L</p>
                    </div>
                </div>

                <!-- Card 3 - Puertas -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Puertas</h5>
                        <p class="card-text">4</p>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <!-- Card 4 - Color -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Color</h5>
                        <p class="card-text">Rojo</p>
                    </div>
                </div>

                <!-- Card 5 - Kilometraje -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Kilometraje</h5>
                        <p class="card-text">15,000 km</p>
                    </div>
                </div>

                <!-- Card 6 - Precio -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Precio</h5>
                        <p class="card-text">25.000 €</p>
                    </div>
                </div>
            </div>
            <div class="col-3">

                <!-- Card 7 - Combustible -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Combustible</h5>
                        <p class="card-text">Gasolina</p>
                    </div>
                </div>

                <!-- Card 8 - Transmisión -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Transmisión</h5>
                        <p class="card-text">Automática</p>
                    </div>
                </div>

                <!-- Card 9 - Seguridad -->
                <div class="card">
                    <div class="card-body-detail">
                        <h5 class="card-title">Seguridad</h5>
                        <p class="card-text">6 airbags</p>
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