<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/miestilo.css') ?>">
    <title>titulo</title>
</head>

<body>
    <!-- Navbar -->
    <section class="container-fluid p-0">
        <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <a href=""><img style="width: 100px" src="<?= base_url('public/assets/img/logo.png') ?>" alt="responsive"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Géneros
                            </a>
                            <ul class="dropdown-menu bg-black">
                                <li><a class="text-white dropdown-item" href="#">Masculino</a></li>
                                <li><a class="text-white dropdown-item" href="#">Femenino</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="#">Niños</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="#">Nosotros</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="bg-white form-control me-2" type="search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <!-- Carrousel -->
    <section class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-ride="carousel" data-bs-interval="2000">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="<?= base_url('public/assets/img/oferta.png') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('public/assets/img/remeras.png') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('public/assets/img/zapatillas.png') ?>" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- Contenido -->
    <!-- Seccion de iconos informativos -->
    <section class="d-flex justify-content-center p-4 align-items-center gap-5 container-fluid bg-black text-center text-white">
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/entrega.png') ?>" alt="">
            <p class="pt-3 m-0">Entregas a todo el pais</p>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/metodo-de-pago.png') ?>" alt="">
            <p class="pt-3 m-0">Todos los medios de pago</p>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/cambio-de-ropa.png') ?>" alt="">
            <p class="pt-3 m-0">Aceptamos cambios</p>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/insignia.png') ?>" alt="">
            <p class="pt-3 m-0">Mas de 1000 clientes satisfechos</p>
        </div>
    </section>
    <!-- Indumentaria destacada -->
    <section class="container-fluid">
        <div>
            <h1 class="text-black text-center pt-5">Destacado</h1>
        </div>
        <div class="d-flex flex-wrap p-5 gap-4 text-white text-center justify-content-center">
        <div class="bg-black text-white  card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="bg-black text-white card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
            </div>
        </div>
        <div class="bg-black text-white card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="bg-black text-white card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
            </div>
        </div>
        <div class="bg-black text-white card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="bg-black text-white card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
            </div>
        </div>
        <div class="bg-black text-white card" style="width: 18rem;">
            <img src="..." class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Card title</h5>
                <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                <a href="#" class="btn btn-outline-light">Go somewhere</a>
            </div>
        </div>
        </div>
    </section>
    <!-- Footer -->
    <footer class="bg-dark" data-bs-theme="dark">
        <h1 class="text-white">Footer de la pagina</h1>
    </footer>
    <script src="<?= base_url('public/assets/js/bootstrap.bundle.min.js') ?>"></script>
</body>

</html>