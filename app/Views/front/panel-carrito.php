<?php
$session = session();
$cart = \Config\Services::cart();
?>

<!-- OFFCANVAS DEL CARRITO -->
<div class="offcanvas offcanvas-end bg-black text-white" tabindex="-1" id="carritoOffcanvas" aria-labelledby="carritoOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="carritoOffcanvasLabel">Tu Carrito</h5>
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <?php if ($session->get('logged_in')): ?>
            <?php if (!empty($cart->contents()) && $cart->totalItems() > 0): ?>
                <form action="<?= site_url('carrito_view/actualizar') ?>" method="post">
                    <?php foreach ($cart->contents() as $item): ?>
                        <div class="d-flex align-items-center mb-3">
                            <img src="<?= base_url('public/assets/uploads/' . $item['options']['imagen']) ?>" width="50" class="me-2">
                            <div class="flex-grow-1">
                                <strong><?= esc($item['name']) ?></strong><br>
                                <span>$<?= number_format($item['price'], 2, ',', '.') ?></span><br>
                                <input type="number" name="cart[<?= esc($item['rowid']) ?>][qty]" min="1" max="99" value="<?= esc($item['qty']) ?>" class="form-control form-control-sm mt-1" style="max-width: 70px;">
                            </div>
                            <a href="<?= site_url('carrito_view/eliminar/' . esc($item['rowid'])) ?>" class="btn btn-sm btn-danger ms-2">X</a>
                        </div>
                    <?php endforeach; ?>

                    <div class="mt-3"><strong>Total: $<?= number_format($cart->total(), 2, ',', '.') ?></strong></div>

                    <div class="d-grid gap-2 mt-3">
                        <a href="<?= site_url('carrito_view/vaciar') ?>" class="btn btn-outline-danger">Vaciar carrito</a>
                        <a href="<?= site_url('checkout') ?>" class="btn btn-success">Finalizar compra</a>
                    </div>
                </form>
            <?php else: ?>
                <div class="alert alert-warning text-center text-black  ">Tu carrito está vacío.</div>
            <?php endif; ?>
        <?php else: ?>
            <div class="text-center">
                <p>Debes <strong>registrarte</strong> o <strong>iniciar sesión</strong> para ver tu carrito.</p>
                <div class="d-flex justify-content-center gap-3 mt-3">
                    <a href="<?= base_url('agregarusuario_view') ?>" class="btn btn-outline-light">Registrarse</a>
                    <a href="<?= base_url('iniciarsesion_view') ?>" class="btn btn-outline-light">Iniciar sesión</a>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>
