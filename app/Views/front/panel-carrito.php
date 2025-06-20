<?php
$session = session();
$cart = \Config\Services::cart();
?>

<!-- OFFCANVAS DEL CARRITO -->
<div class="offcanvas offcanvas-end bg-black text-white" tabindex="-1" id="carritoOffcanvas"
    aria-labelledby="carritoOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="carritoOffcanvasLabel">Tu Carrito</h5>
        <!-- Botón para cerrar el offcanvas -->
        <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas"
            aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <?php if ($session->get('logged_in')): ?>
            <!-- Si el carrito tiene productos, muestra su contenido -->
            <?php if (!empty($cart->contents()) && $cart->totalItems() > 0): ?>
                <form action="<?= site_url('carrito_view/actualizar') ?>" method="post">
                    <!-- Itera sobre los items del carrito -->
                    <?php foreach ($cart->contents() as $item): ?>
                        <div class="d-flex align-items-center mb-3">
                            <img src="<?= base_url('public/assets/uploads/' . $item['options']['imagen']) ?>" width="50"
                                class="me-2">
                            <div class="flex-grow-1">
                                <strong><?= esc($item['name']) ?></strong><br>
                                <span>$<?= number_format($item['price'], 2, ',', '.') ?></span><br>
                                <p class="mt-2 mb-0">Cantidad: <strong><?= esc($item['qty']) ?></strong></p>
                            </div>
                            <!-- Botón para eliminar un producto del carrito -->
                            <a href="<?= site_url('carrito_view/eliminar/' . esc($item['rowid'])) ?>"
                                class="btn btn-sm btn-danger ms-2">X</a>
                        </div>
                    <?php endforeach; ?>

                    <!-- Muestra el total del carrito -->
                    <div class="mt-3"><strong>Total: $<?= number_format($cart->total(), 2, ',', '.') ?></strong></div>

                    <!-- Botones para vaciar el carrito o finalizar la compra -->
                    <div class="d-grid gap-2 mt-3">
                        <a href="<?= site_url('carrito_view/vaciar') ?>" class="btn btn-outline-danger">Vaciar carrito</a>
                        <a href="<?= site_url('checkout') ?>" class="btn btn-success">Finalizar compra</a>
                    </div>
                </form>
            <?php else: ?>
                <!-- Mensaje cuando el carrito está vacío -->
                <div class="text-center text-white">Tu carrito está vacío.</div>
            <?php endif; ?>
        <?php else: ?>
            <!-- Mensaje cuando el usuario no ha iniciado sesión -->
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
