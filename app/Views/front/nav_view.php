<!-- Barra de navegacion -->
<section class="container-fluid p-0">
    <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="<?= base_url('plantilla_principal') ?>"><img style="width: 100px"
                    src="<?= base_url('public/assets/img/Iconos/logo.png') ?>" alt="responsive"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarScroll">
                <ul class="navbar-nav nav-underline me-auto my-2 my-lg-0 navbar-nav-scroll"
                    style="--bs-scroll-height: 100px;">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Ofertas y descuentos
                        </a>
                        <div class="dropdown-menu bg-black m-0 p-0 text-white">
                            <div
                                class="d-flex p-4 m-0 gap-1 align-items-center justify-content-center fst-italic dropdown-header bg-white text-black">
                                <h6 class="m-0">Ofertas y descuentos destacados</h6>
                                <img style="width: 5vw;" src="<?= base_url('public/assets/img/Iconos/fuego.gif') ?>"
                                    alt="">
                            </div>
                            <div class="d-flex align-items-center">
                                <a href="<?= base_url('detalles_producto') ?>">
                                    <img style="width: 10vw;"
                                        src="<?= base_url('public/assets/img/Remeras/Hombres/Remera-rider-hombre.jpg') ?>"
                                        alt="Promo 1">
                                </a>
                                <div class="p-4">
                                    <strong>Descuento del 20%</strong><br>
                                    <small>En Remera rider para hombre</small>
                                </div>
                            </div>
                            <div class="m-0 p-0">
                                <a href="<?= base_url('plantilla_productos/Ninos') ?>">
                                    <img style="width: 100%" src="<?= base_url('public/assets/videos/Oferta.gif') ?>"
                                        alt="">
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Géneros
                        </a>
                        <ul class="dropdown-menu bg-black">
                            <li><a class="text-white dropdown-item"
                                    href="<?= base_url('plantilla_productos/Hombre') ?>">Hombre</a></li>
                            <li><a class="text-white dropdown-item"
                                    href="<?= base_url('plantilla_productos/Mujer') ?>">Mujer</a></li>
                            <li><a class="text-white dropdown-item"
                                    href="<?= base_url('plantilla_productos/Ninos') ?>">Niños</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="text-white nav-link" href="<?= base_url('quienes_somos') ?>">Quienes somos</a>
                    </li>
                </ul>
                <div class="nav-busqueda d-flex gap-4 m-2 justify-content-end align-items-center">
                    <!-- Boton login -->
                    <div class="nav-item dropdown">
                        <a class="btn m-0 p-0" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                            <img class="nav-img" src="<?= base_url('public/assets/img/Iconos/usuario.png') ?>"
                                alt="Usuario">
                        </a>
                        <ul id="info-sesion" style="width: 25vw;" class="dropdown-menu bg-black my-2 p-4">
                            <li class="d-flex justify-content-between align-items-center p-0">
                                <h4>Mi cuenta</h4>
                                <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="offcanvas"
                                    aria-label="Cerrar"></button>
                            </li>
                            <hr>
                            <li class="d-flex justify-content-center">
                                <div class="d-flex gap-4 align-items-center">
                                    <img style="width: 90px; height: 90px; object-fit: cover; border-radius: 100%;"
                                        src="<?= base_url('public/assets/img/Iconos/sin-usuario.png') ?>" alt="">
                                </div>
                            </li>
                            <li class="d-flex justify-content-center gap-4 mt-3">
                                <a style="width: auto;" href="<?= base_url('agregarusuario_view') ?>" class="btn d-flex align-items-center boton-blanco">Registrarme</a>
                                <a style="width: auto;" href="<?= base_url('agregarusuario_view') ?>" class="btn d-flex align-items-center boton-blanco">Iniciar sesion</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Boton carrito -->
                    <a class="btn m-0 p-0" data-bs-toggle="offcanvas" href="#carritoOffcanvas" role="button"
                        aria-controls="carritoOffcanvas">
                        <img class="nav-img" src="<?= base_url('public/assets/img/Iconos/carrito-nav.png') ?>" alt="">
                    </a>
                    <!-- Buscador -->
                    <form action="<?= base_url('busqueda/resultados') ?>" class="d-flex" role="search">
                        <input class="bg-white form-control me-2" name="q" type="search" aria-label="Search">
                        <button class="btn btn-outline-light" type="submit">Buscar</button>
                    </form>
                </div>
            </div>
        </div>
    </nav>
</section>