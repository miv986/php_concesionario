<?php
include("Concesionario.php");
$concesionario = new Concesionario();
$listaCoches = $concesionario->obtenerCoches();
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concesionario</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">Concesionario</h1>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="nav-link" href="#">Logo</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                    <a class="nav-link" href="#">Features</a>
                    <a class="nav-link" href="#">Pricing</a>
                </div>
            </div>
        </div>
    </nav>

    <div class="container-fluid">
        <div class="row">
            <?php
            foreach ($listaCoches as $coche) :

                // echo "Marca: " . $coche->marca;
                // echo "Modelo: " . $coche->modelo;
                // echo "Precio: " . $coche->precio;
                // echo "Kilómetros: " . $coche->kilometros;

                $imagenes = json_decode($coche->imagenes);
                if (isset($imagenes[0])) {
                    $imagen_url = $imagenes[0];
                } else {
                    $imagen_url = '/images/car.jpg';
                }

            ?>
                <div class="col-12 col-md-6 col-lg-3 card-coche">
                    <div class="card">
                        <a class="link-detalleCoche" href="detalleCoche.php?id=<?= $coche->id ?>">
                            <img src="<?= $imagen_url ?> " class="card-img-top" alt="card-img-top">
                            <div class="card-body">
                                <div class="card-title-model">
                                    <h5 class="card-title"> <?= $coche->marca ?></h5>
                                    <h6 class="card-model"> <?= $coche->modelo ?> </h6>
                                </div>
                                <h5 class="card-price"><?= $coche->precio . " €" ?></h5>
                                <p class="card-text"><?= $coche->descripcion ?></p>
                                <ul class="card-ul-details">
                                    <li><?= $coche->anyo ?></li>
                                    <li><?= $coche->kilometros . "km" ?></li>
                                    <li><?= $coche->combustible ?></li>
                                    <li><?= $coche->transmision ?></li>
                                </ul>
                            </div>
                        </a>
                    </div>
                </div>
            <?php endforeach;

            unset($coche);
            ?>

        </div>
    </div>
</body>

</html>