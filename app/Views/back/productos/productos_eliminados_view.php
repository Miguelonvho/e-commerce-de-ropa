<div class="crud-container bg-black text-white d-flex flex-column" style="height: 550px;">

    <!-- Botones -->
    <div class="d-flex justify-content-end mt-3 mx-4">
        <a href="<?= base_url('crud_productos_view') ?>" class="btn btn-outline-secondary btn-sm me-2">Volver</a>
    </div>

    <!-- Barra de búsqueda -->
    <form method="get" class="d-flex justify-content-end mt-2 mx-4 mb-2">
        <div class="input-group" style="max-width: 250px;">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar producto..."
                value="<?= esc($buscar ?? '') ?>">
            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        </div>
    </form>

    <!-- Vista escritorio: Tabla scrollable -->
    <div class="d-none d-md-block mx-4 rounded bg-white shadow-sm border overflow-auto" style="max-height: 500px;">
        <table class="table table-bordered table-hover mb-0 text-center align-middle" style="min-width: 900px;">
            <thead class="bg-light sticky-top" style="top: 0; z-index: 1;">
                <tr>
                    <th style="width: 10%;">Imagen</th>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 25%;">Producto</th>
                    <th style="width: 15%;">Costo</th>
                    <th style="width: 15%;">Precio Venta</th>
                    <th style="width: 10%;">Stock</th>
                    <th style="width: 15%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($productos)): ?>
                    <tr>
                        <td colspan="7" class="text-center">No se encontraron productos eliminados.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($productos as $producto): ?>
                        <tr>
                            <td>
                                <?php if (empty($producto['imagen'])): ?>
                                    <img src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>"
                                        style="width: 70px; height: 60px; object-fit: cover;">
                                <?php else: ?>
                                    <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>"
                                        style="width: 70px; height: 60px; object-fit: cover;">
                                <?php endif; ?>
                            </td>
                            <td><?= esc($producto['id_producto']) ?></td>
                            <td><?= esc($producto['nombre_prod']) ?></td>
                            <td>$<?= number_format($producto['precio_costo'], 2, ',', '.') ?></td>
                            <td>$<?= number_format($producto['precio_venta'], 2, ',', '.') ?></td>
                            <td><?= esc($producto['stock']) ?></td>
                            <td class="d-flex justify-content-center gap-2">
                                <a href="<?= base_url('editar_productos_view/' . $producto['id_producto']) ?>"
                                    class="btn btn-sm btn-primary">Editar</a>
                                <a href="<?= base_url('restaurar_producto/' . $producto['id_producto']) ?>"
                                    class="btn btn-sm btn-warning">Activar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Vista móvil: Tarjetas -->
    <div class="d-md-none d-flex justify-content-center overflow-auto gap-4 flex-wrap mx-3 mt-3">
        <?php if (empty($productos)): ?>
            <div class="text-center text-white p-5">No se encontraron productos eliminados.</div>
        <?php else: ?>
            <?php foreach ($productos as $producto): ?>
                <div class="card mb-3">
                    <div class="card-body">
                        <div class="mb-2 d-flex flex-column">
                            <?php if (empty($producto['imagen'])): ?>
                                <img src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>" class="me-3"
                                    style="width: 80px; height: 70px; object-fit: cover;">
                            <?php else: ?>
                                <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>" class="me-3"
                                    style="width: 80px; height: 70px; object-fit: cover;">
                            <?php endif; ?>
                            <div>
                                <p class="mb-1"><strong>ID:</strong> <?= esc($producto['id_producto']) ?></p>
                                <p class="mb-1"><strong>Producto:</strong> <?= esc($producto['nombre_prod']) ?></p>
                                <p class="mb-1"><strong>Costo:</strong>
                                    $<?= number_format($producto['precio_costo'], 2, ',', '.') ?></p>
                                <p class="mb-1"><strong>Venta:</strong>
                                    $<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>
                                <p class="mb-2"><strong>Stock:</strong> <?= esc($producto['stock']) ?></p>
                                <div class="d-flex justify-content-center">
                                    <a href="<?= base_url('editar_productos_view/' . $producto['id_producto']) ?>"
                                        class="btn btn-sm btn-primary me-2">Editar</a>
                                    <a href="<?= base_url('restaurar_producto/' . $producto['id_producto']) ?>"
                                        class="btn btn-sm btn-warning">Activar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>