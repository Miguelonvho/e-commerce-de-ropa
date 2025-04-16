<!DOCTYPE html>
<html lang="es">

<body>
    <section class="container-fluid text-black my-5">
        <h1 class="fw-light">Ropa de <?= $genero ?></h1>
        <hr>
        <!-- Ropa de hombre -->
        <?php if ($genero == 'Hombre'): ?>
            <div class="d-flex flex-wrap p-5 gap-3 text-white justify-content-center">
                <div class="bg-black text-white  card" style="width: 18rem;">
                    <img class="imagen-ropa" src="<?= base_url('public/assets/img/remera-New-Balance.jpg') ?>" class="card-img-top" alt="...">
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
                    <img class="imagen-ropa" src="<?= base_url('public/assets/img/remera-lisa-blanca.jpg') ?>" class="card-img-top" alt="...">
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
                    <img class="imagen-ropa" src="<?= base_url('public/assets/img/jeans-Levis-hombre.jpg') ?>" class="card-img-top" alt="...">
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
                    <img class="imagen-ropa" src="<?= base_url('public/assets/img/buzo-Nike.jpg') ?>" class="card-img-top" alt="...">
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
                <!-- Ropa de mujer -->
            <?php elseif ($genero == 'Mujer'): ?>
                <div class="d-flex flex-wrap p-5 gap-3 text-white justify-content-center">
                    <div class="bg-black text-white  card" style="width: 18rem;">
                        <img class="imagen-ropa" src="<?= base_url('public/assets/img/ropa-mujer-1.jpg') ?>" class="card-img-top" alt="...">
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
                        <img class="imagen-ropa" src="<?= base_url('public/assets/img/ropa-mujer-2.jpg') ?>" class="card-img-top" alt="...">
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
                        <img class="imagen-ropa" src="<?= base_url('public/assets/img/ropa-mujer-3.jpg') ?>" class="card-img-top" alt="...">
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
                        <img class="imagen-ropa" src="<?= base_url('public/assets/img/ropa-mujer-4.jpg') ?>" class="card-img-top" alt="...">
                        <div class="d-flex bg-black text-white card-body flex-column justify-content-between">
                            <div class="d-flex flex-column gap-5">
                                <h3>Remera lisa blanca</h3>
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
                <?php endif; ?>
                </div>
    </section>
</body>

</html>