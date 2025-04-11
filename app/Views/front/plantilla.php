<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/bootstrap.min.css') ?>">
    <link rel="stylesheet" href="<?= base_url('public/assets/css/miestilo.css') ?>">
    <title>G&G Indumentaria</title>
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
                    <div class="d-flex gap-2 justify-content-between" style="height: 40px;">
                        <ul class="d-flex flex-row navbar-nav">
                            <li class="nav-item">
                                <a class="btn" href=""><img src="<?= base_url('public/assets/img/carrito-nav.png') ?>" alt=""></a>
                            </li>
                            <li class="nav-item">
                                <a class="btn" href=""><img style="width: 90%;" src="<?= base_url('public/assets/img/usuario.png') ?>" alt=""></a>
                            </li>
                        </ul>
                        <form class="d-flex" role="search">
                            <input class="bg-white form-control me-2" type="search" aria-label="Search">
                            <button class="btn btn-outline-light" type="submit">Buscar</button>
                        </form>
                    </div>
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
            <p class="pt-3 m-0 fw-semibold">Entregas a todo el pais</p>
            <a class="text-white" href="">Ver mas</a>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/metodo-de-pago.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Todos los medios de pago</p>
            <a class="text-white" href="">Ver mas</a>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/cambio-de-ropa.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Aceptamos cambios</p>
            <a class="text-white" href="">Ver mas</a>
        </div>
        <div class="iconos-informativos d-flex flex-column align-items-center">
            <img src="<?= base_url('public/assets/img/insignia.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Mas de 1000 clientes satisfechos</p>
            <a class="text-white" href="">Ver mas</a>
        </div>
    </section>
    <!-- Indumentaria destacada -->
    <section class="container-fluid">
        <div>
            <h1 class="text-black text-center pt-5">Destacado</h1>
        </div>
        <div class="d-flex flex-wrap p-5 gap-3 text-white justify-content-center">
            <div class="bg-black text-white  card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="d-flex flex-column bg-black text-white card-body justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h4>Nike Run-swift</h4>
                    </div>
                    <div class="d-flex flex-column gap-3 text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 row-2 justify-content-end">
                        <a href="#" class="btn btn-success">Comprar</a>
                        <a href="#" class="btn btn-carrito btn-outline-secondary"><img src="<?= base_url('public/assets/img/carrito.png') ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-black text-white card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="d-flex bg-black text-white card-body flex-column justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h4>Remera Essentials Stacked</h>
                    </div>
                    <div class="d-flex flex-column gap-3 text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 row-2 justify-content-end">
                        <a href="#" class="btn btn-success">Comprar</a>
                        <a href="#" class="btn btn-carrito btn-outline-secondary"><img src="<?= base_url('public/assets/img/carrito.png') ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-black text-white card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="d-flex bg-black text-white card-body flex-column justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h4>Jean Levi's</h4>
                    </div>
                    <div class="d-flex flex-column gap-3 text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 row-2 justify-content-end">
                        <a href="#" class="btn btn-success">Comprar</a>
                        <a href="#" class="btn btn-carrito btn-outline-secondary"><img src="<?= base_url('public/assets/img/carrito.png') ?>" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-black text-white card" style="width: 18rem;">
                <img src="..." class="card-img-top" alt="...">
                <div class="d-flex bg-black text-white card-body flex-column justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h3>Buzo Nike</h3>
                    </div>
                    <div class="d-flex flex-column gap-3 text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 row-2 justify-content-end">
                        <a href="#" class="btn btn-success">Comprar</a>
                        <a href="#" class="btn btn-carrito btn-outline-secondary"><img src="<?= base_url('public/assets/img/carrito.png') ?>" alt=""></a>
                        </div>
                    </div>
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