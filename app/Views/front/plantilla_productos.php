<section class="container-fluid text-black my-5">
    <h1 class="fw-light"><?= $titulo ?></h1>
    <hr>
    <div class="d-flex justify-content-center flex-wrap gap-4 p-0 m-0">
        <?php foreach ($productos as $producto): ?>
            <div class="card bg-black text-white" style="max-width: 300px">
                <img class="imagen-ropa card-img-top" src="<?= base_url('public/assets/img/' . $producto['imagen']) ?>" alt="<?= esc($producto['nombre']) ?>">
                <div class="card-body d-flex flex-column justify-content-between">
                    <div class="mb-3">
                        <h4><?= esc($producto['nombre']) ?></h4>
                    </div>
                    <div class="text-center">
                        <h1 class="card-title">$<?= esc($producto['precio']) ?></h1>
                        <div class="d-flex gap-2 justify-content-end">
                            <a href="#" class="btn boton-blanco">Comprar</a>
                            <a href="#" class="btn btn-carrito btn-outline-secondary">
                                <img src="<?= base_url('public/assets/img/carrito.png') ?>" alt="">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</section>