<!-- Panel lateral del carrito -->
<section class="offcanvas bg-black text-white offcanvas-end" tabindex="-1" id="carritoOffcanvas"
    aria-labelledby="carritoOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="carritoOffcanvasLabel">Tu carrito</h5>
        <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <?php if (session()->get('logged_in')): ?>
            <?php if (!empty($productos)): ?>
                <div class="mb-3 border-bottom pb-2">
                    <?php foreach ($productos as $producto): ?>
                        <div class="d-flex align-items-center mb-3">
                            <img src="<?= base_url($producto['img']) ?>" alt="Producto" class="img-fluid me-2"
                                style="width: 50px; height: auto;">
                            <div>
                                <p class="mb-0"><?= esc($producto['nombre']) ?></p>
                                <small><?= esc($producto['cantidad']) ?> x
                                    $<?= number_format($producto['precio'], 0, ',', '.') ?></small>
                            </div>
                            <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
                        </div>
                    <?php endforeach; ?>
                </div>
                <div class="d-flex justify-content-between mt-3">
                    <strong>Total:</strong>
                    <span>
                        $<?= number_format(array_sum(array_map(function ($p) {
                            return $p['precio'] * $p['cantidad'];
                        }, $productos)), 0, ',', '.') ?>
                    </span>
                </div>
                <div class="mt-4 d-grid gap-2">
                    <a href="<?= base_url('ruta/checkout') ?>" class="btn boton-blanco">Finalizar compra</a>
                </div>
            <?php else: ?>
                <p>Tu carrito está vacío.</p>
            <?php endif; ?>
        <?php else: ?>
            <div class="d-flex flex-column align-items-center text-center mt-4">
                <p class="mb-3">Debes iniciar sesión para ver tu carrito.</p>
                <div class="d-flex gap-2">
                    <a href="<?= base_url('iniciarsesion_view') ?>" class="btn btn-outline-light">Iniciar sesión</a>
                    <a href="<?= base_url('agregarusuario_view') ?>" class="btn btn-outline-light">Registrarse</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>