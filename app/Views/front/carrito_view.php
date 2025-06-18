<?php $session = session(); ?>
<section class="container py-5">
    <h1 class="text-center mb-4">Tu Carrito</h1>

    <?php if (!empty($cart->contents()) && $cart->totalItems() > 0): ?>
        <form action="<?= site_url('carrito_view/actualizar') ?>" method="post">
            <div class="table-responsive">
                <table class="table table-bordered align-middle text-center">
                    <thead class="table-dark">
                        <tr>
                            <th>Imagen</th>
                            <th>Producto</th>
                            <th>Precio</th>
                            <th>Cantidad</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($cart->contents() as $item): ?>
                            <tr>
                                <td>
                                    <img src="<?= base_url('public/assets/uploads/' . $item['options']['imagen']) ?>" width="60" alt="Imagen">
                                </td>
                                <td><?= esc($item['name']) ?></td>
                                <td>$<?= number_format($item['price'], 2, ',', '.') ?></td>
                                <td style="max-width: 100px;">
                                    <input type="number" name="cart[<?= esc($item['rowid']) ?>][qty]" min="1" max="99" value="<?= esc($item['qty']) ?>" class="form-control">
                                </td>
                                <td>$<?= number_format($item['subtotal'], 2, ',', '.') ?></td>
                                <td>
                                    <a href="<?= site_url('carrito_view/eliminar/' . esc($item['rowid'])) ?>" class="btn btn-sm btn-danger">Eliminar</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>

            <div class="d-flex justify-content-between align-items-center mt-4">
                <a href="<?= site_url('catalogo_productos_view') ?>" class="btn btn-outline-secondary">&larr; Seguir comprando</a>
                <div><strong>Total: $<?= number_format($cart->total(), 2, ',', '.') ?></strong></div>
                <div class="d-flex gap-2">
                    <button type="submit" class="btn btn-primary">Actualizar carrito</button>
                    <a href="<?= site_url('carrito_view/vaciar') ?>" class="btn btn-outline-danger">Vaciar carrito</a>
                    <a href="<?= site_url('checkout') ?>" class="btn btn-success">Finalizar compra</a>
                </div>
            </div>
        </form>
    <?php else: ?>
        <div class="alert alert-warning text-center">
            <p>Tu carrito está vacío.</p>
            <a href="<?= site_url('catalogo_productos_view') ?>" class="btn btn-outline-dark mt-3">Ir al catálogo</a>
        </div>
    <?php endif; ?>
</section>
