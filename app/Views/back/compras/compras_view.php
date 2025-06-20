<?php $session = session(); ?>

<div class="container py-5" style="min-height: 400px;">
    <h1 class="text-center mb-4 fw-light">Mis Compras</h1>

    <!-- Muestra un mensaje flash si existe -->
    <?php if (session()->getFlashdata('mensaje')): ?>
        <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <?= session()->getFlashdata('mensaje') ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
        </div>
    <?php endif; ?>

    <!-- Si no hay ventas registradas, muestra un mensaje motivando a comprar -->
    <?php if (empty($ventas)): ?>
        <div class="alert alert-dark text-center mt-5" role="alert">
            <h4 class="alert-heading">No tenés compras registradas</h4>
            <p>Podés explorar nuestro catálogo y realizar tu primera compra.</p>
            <a class="btn btn-warning mt-3" href="<?= base_url('catalogo_productos_view') ?>">Ir al Catálogo</a>
        </div>

        <!-- Si hay ventas, muestra la tabla con los datos -->
    <?php else: ?>
        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center align-middle">
                <thead>
                    <tr>
                        <th class="bg-black text-white">N° Orden</th>
                        <th class="bg-black text-white">Fecha</th>
                        <th class="bg-black text-white">Total</th>
                        <th class="bg-black text-white">Ver Detalle</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($ventas as $venta): ?>
                        <tr class="text-center align-middle">
                            <td><?= $venta['id'] ?></td>
                            <td><?= $venta['fecha'] ?></td>
                            <td>$<?= number_format($venta['total_venta'], 2, ',', '.') ?></td>
                            <td>
                                <a href="<?= site_url('ver_factura/' . $venta['id']) ?>" class="btn btn-sm btn-outline-primary">
                                    Ver factura
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Mensaje de agradecimiento al final -->
        <div class="text-center mt-4">
            <p class="h5 text-success">Gracias por tu compra</p>
        </div>
    <?php endif; ?>
</div>