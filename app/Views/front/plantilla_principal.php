<body>
    <!-- Carrousel -->
    <section class="container-fluid p-0">
        <div id="carouselExampleCaptions" class="carousel carousel-dark slide" data-bs-touch="true"
            data-bs-ride="carousel" data-bs-interval="2000">
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
                    <img src="<?= base_url('public/assets/img/Carrusel/oferta.png') ?>" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('public/assets/img/Carrusel/remeras.png') ?>" class="d-block w-100"
                        alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?= base_url('public/assets/img/Carrusel/jeans.png') ?>" class="d-block w-100" alt="...">
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
    <section
        class="d-flex align-items-center justify-content-center bg-black text-white flex-wrap text-center gap-5 p-5">
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/Iconos/entrega.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Entregas a todo el pais</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/Iconos/metodo-de-pago.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Todos los medios de pago</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/Iconos/cambio-de-ropa.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Aceptamos cambios</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
        <div class="iconos-informativos">
            <img src="<?= base_url('public/assets/img/Iconos/insignia.png') ?>" alt="">
            <p class="pt-3 m-0 fw-semibold">Calidad garantizada</p>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Ver mas</a>
        </div>
    </section>
    <section class="container-fluid text-black my-5">
        <h1 class="fw-light">Destacados</h1>
        <hr>
        <div class="d-flex justify-content-center flex-wrap gap-4 pt-5 m-0">
            <?php foreach ($destacados as $producto): ?>
                <div class="card bg-black text-white" style="max-width: 300px;">
                    <img class="card-img-top imagen-ropa"
                        src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>"
                        alt="<?= esc($producto['nombre_prod']) ?>" style="height: 250px; object-fit: cover;">

                    <div class="card-body d-flex flex-column justify-content-between">
                        <div class="mb-3">
                            <h5 class="card-title"><?= esc($producto['nombre_prod']) ?></h5>
                            <p class="fw-bold mb-2">$<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>
                            <p class="card-text">
                                <small><?= $producto['stock'] ?> unidades disponibles</small><br>
                                <?php if ($producto['stock'] > 0): ?>
                                    <span class="badge bg-success">Hay stock</span>
                                <?php else: ?>
                                    <span class="badge bg-danger">Sin stock</span>
                                <?php endif; ?>
                            </p>
                        </div>
                        <form action="<?= site_url('carrito_view/agregar') ?>" method="post" class="mt-auto">
                            <input type="hidden" name="id" value="<?= $producto['id_producto'] ?>">
                            <input type="hidden" name="nombre_prod" value="<?= $producto['nombre_prod'] ?>">
                            <input type="hidden" name="precio_venta" value="<?= $producto['precio_venta'] ?>">
                            <input type="hidden" name="imagen" value="<?= $producto['imagen'] ?>">

                            <div class="input-group mb-2">
                                <span class="input-group-text">Cantidad</span>
                                <input type="number" name="cantidad" min="1" max="<?= $producto['stock'] ?>" value="1"
                                    class="form-control" style="max-width: 100px;">
                            </div>

                            <button type="submit" class="btn btn-outline-light w-100" <?= $producto['stock'] <= 0 ? 'disabled' : '' ?>>
                                Agregar al carrito
                            </button>
                        </form>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>

    <div aria-live="polite" aria-atomic="true" class="position-relative">
        <div class="toast-container position-fixed end-0 bottom-0 m-2" style="z-index: 9999;">
            <?php if (session()->getFlashdata('welcome_message')): ?>
                <div class="toast align-items-center text-bg-success border-0" role="alert" aria-live="assertive"
                    aria-atomic="true">
                    <div class="d-flex justify-content-center">
                        <div class="toast-body">
                            <?= session()->getFlashdata('welcome_message') ?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>

</body>