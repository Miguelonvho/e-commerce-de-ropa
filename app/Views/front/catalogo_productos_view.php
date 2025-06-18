<!-- Vista: catalogo_productos_view.php -->
<section class="container-fluid bg-white text-dark py-4">
    <h1 class="text-center mb-4">Catálogo de Productos</h1>
    <div class="row">
        <!-- Filtros -->
        <aside class="col-md-3 mb-4">
             <form method="get" action="<?= site_url('catalogo_productos_view') ?>">

                <div class="card mb-3">
                    <div class="card-header bg-dark text-white">Filtrar por Edad</div>
                    <div class="card-body">
                        <?php foreach ($edades as $edad): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="edad[]" value="<?= $edad['id_edad'] ?>" <?= in_array($edad['id_edad'], $edadSeleccionada ?? []) ? 'checked' : '' ?>>
                                <label class="form-check-label"> <?= esc($edad['nombre']) ?> </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-dark text-white">Filtrar por Categoría</div>
                    <div class="card-body">
                        <?php foreach ($categorias as $categoria): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="categoria[]" value="<?= $categoria['id_categoria'] ?>" <?= in_array($categoria['id_categoria'], $categoriaSeleccionada ?? []) ? 'checked' : '' ?>>
                                <label class="form-check-label"> <?= esc($categoria['nombre']) ?> </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="card-header bg-dark text-white">Filtrar por Marca</div>
                    <div class="card-body">
                        <?php foreach ($marcas as $marca): ?>
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="marca[]" value="<?= $marca['id_marca'] ?>" <?= in_array($marca['id_marca'], $marcaSeleccionada ?? []) ? 'checked' : '' ?>>
                                <label class="form-check-label"> <?= esc($marca['nombre']) ?> </label>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100">Aplicar Filtros</button>
            </form>
        </aside>

        <!-- Productos -->
        <div class="col-md-9">
            <div class="row g-4">
                <?php if (empty($productos)): ?>
                    <div class="col-12">
                        <p class="text-center">No se encontraron productos con los filtros seleccionados.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($productos as $producto): ?>
                        <div class="col-md-4">
                            <div class="card h-100 shadow">
                                <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>" class="card-img-top" alt="<?= esc($producto['nombre_prod']) ?>" style="height: 250px; object-fit: cover;">
                               <div class="card-body d-flex flex-column">
    <h5 class="card-title"><?= esc($producto['nombre_prod']) ?></h5>
    <p class="card-text mb-1 fw-bold">$<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>

    <!-- Stock y estado -->
    <p class="card-text mb-2">
        <small class="text-muted">
            <?= $producto['stock'] ?> unidades disponibles
        </small><br>
        <?php if ($producto['stock'] > 0): ?>
            <span class="badge bg-success">Hay stock</span>
        <?php else: ?>
            <span class="badge bg-danger">Sin stock</span>
        <?php endif; ?>
    </p>

    <a href="#" class="btn btn-outline-dark mt-auto <?= $producto['stock'] <= 0 ? 'disabled' : '' ?>">Agregar al carrito</a>
</div>

                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>
