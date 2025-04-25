<!DOCTYPE html>
<html lang="es">

<body>
    <!-- Carrousel -->
    <section class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide"  data-bs-touch="true" data-bs-ride="carousel" data-bs-interval="2000">
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
    <section class="d-flex align-items-center justify-content-center bg-black text-white flex-wrap text-center gap-5 p-5">
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/entrega.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Entregas a todo el pais</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/metodo-de-pago.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Todos los medios de pago</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/cambio-de-ropa.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Aceptamos cambios</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/insignia.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Calidad garantizada</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
    </section>
    <!-- Indumentaria destacada -->
    <section class="container-fluid text-black my-5">
        <h1 class="fw-light">Destacados</h1>
        <hr>
        <div class="d-flex justify-content-center flex-wrap gap-4 pt-5 m-0">
            <div class="card bg-black text-white" style="max-width: 400px">
                <img class="imagen-ropa card-img-top" src="<?= base_url('public/assets/img/ropa-hombre-1.jpg') ?>" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h4>Remera New Balance</h4>
                    </div>
                    <div class="text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-success text-center">Comprar</a>
                            <a href="#" class="btn btn-carrito btn-outline-secondary">
                                <img src="<?= base_url('public/assets/img/carrito.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-black text-white">
                <img class="imagen-ropa card-img-top" src="<?= base_url('public/assets/img/ropa-mujer-1.jpg') ?>" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h4>Blusa off shoulders</h4>
                    </div>
                    <div class="text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-success">Comprar</a>
                            <a href="#" class="btn btn-carrito btn-outline-secondary">
                                <img src="<?= base_url('public/assets/img/carrito.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-black text-white" style="max-width: 300px">
                <img class="imagen-ropa card-img-top" src="<?= base_url('public/assets/img/ropa-hombre-2.jpg') ?>" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h4>Remera lisa</h4>
                    </div>
                    <div class="text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-success">Comprar</a>
                            <a href="#" class="btn btn-carrito btn-outline-secondary">
                                <img src="<?= base_url('public/assets/img/carrito.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card bg-black text-white" style="max-width: 300px">
                <img class="imagen-ropa card-img-top" src="<?= base_url('public/assets/img/ropa-mujer-2.jpg') ?>" alt="...">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h4>Parca gabardina blanca</h4>
                    </div>
                    <div class="text-center">
                        <h1 class="card-title">$xxxxxx</h1>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn btn-success">Comprar</a>
                            <a href="#" class="btn btn-carrito btn-outline-secondary">
                                <img src="<?= base_url('public/assets/img/carrito.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>
</body>

</html>