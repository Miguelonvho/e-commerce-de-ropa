<!DOCTYPE html>
<html lang="es">

<body>
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
    <section class="d-flex justify-content-center p-5 align-items-center gap-5 container-fluid bg-black text-center text-white">
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
                <img style="object-fit: cover; height: 60%;" src="<?= base_url('public/assets/img/remera-New-Balance.jpg') ?>" class="card-img-top" alt="...">
                <div class="d-flex flex-column bg-black text-white card-body justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h4>Remera New Balance</h4>
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
                <img style="object-fit: cover; height: 60%;" src="<?= base_url('public/assets/img/remera-New-Balance.jpg') ?>" class="card-img-top" alt="...">
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
                <img style="object-fit: cover; height: 60%;" src="<?= base_url('public/assets/img/jeans-Levis-hombre.jpg') ?>" class="card-img-top" alt="...">
                <div class="d-flex bg-black text-white card-body flex-column justify-content-between">
                    <div class="d-flex flex-column gap-5">
                        <h4>Jeans Levi's hombre</h4>
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
                <img style="object-fit: cover; height: 60%;" src="<?= base_url('public/assets/img/buzo-Nike.jpg') ?>" class="card-img-top" alt="...">
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
</body>

</html>