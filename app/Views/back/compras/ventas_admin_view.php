<?php if (empty($ventas)) : ?>
<div class="container mt-5">
    <div class="alert alert-dark text-center" role="alert">
        <h4 class="alert-heading">No se registraron ventas todavía</h4>
        <p>Cuando se registre una venta, aparecerá aquí.</p>
    </div>
</div>
<?php else : ?>
<div class="container my-5">
    <div class="table-responsive-sm text-center">
        <h2 class="mb-4">Historial de Ventas</h2>
        <table class="table table-bordered table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>ID Venta</th>
                    <th>Cliente</th>
                    <th>Total</th>
                    <th>Fecha</th>
                    <th>Opción</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($ventas as $venta): ?>
                    <tr>
                        <td><?= esc($venta['id']) ?></td>
                        <td><?= esc($venta['nombre']) . ' ' . esc($venta['apellido']) ?></td>
                        <td>$<?= number_format($venta['total_venta'], 2, ',', '.') ?></td>
                        <td><?= esc($venta['fecha']) ?></td>
                        <td>
                            <a href="<?= base_url('ver_factura/' . $venta['id']) ?>" class="btn btn-sm btn-outline-primary">
                                Ver Detalle
                            </a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<?php endif; ?>
