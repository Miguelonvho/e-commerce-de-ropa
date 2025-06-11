<?php $validation = \Config\Services::validation(); ?>
<?= csrf_field() ?>

<div class="container d-flex justify-content-center align-items-center my-5">
    <form class="formulario bg-black text-white p-4 rounded shadow-lg w-100" style="max-width: 900px;" action="<?= site_url('editar-producto') ?>" enctype="multipart/form-data" method="POST">
        <h1 class="fw-light mb-4 text-center">Editar producto</h1>

        <!-- Panel dinámico con tabs -->
        <ul class="nav nav-tabs mb-4" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form active" id="datos-tab" data-bs-toggle="tab" data-bs-target="#datos" type="button" role="tab">Datos principales</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock" type="button" role="tab">Stock y precios</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form" id="imagen-tab" data-bs-toggle="tab" data-bs-target="#imagen" type="button" role="tab">Imagen</button>
            </li>
        </ul>

        <div class="tab-content d-flex justify-content-center align-items-center border p-5" id="productTabContent" style="height: 400px;">

            <!-- TAB 1 -->
            <div class="tab-pane fade show active" id="datos" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="nombre-producto" class="form-label">Nombre actual: <strong><?= esc($old['nombre_prod']) ?></strong></label>
                        <input type="text" class="form-control" id="nombre_prod" name="nombre-producto" value="<?= set_value('nombre_prod') ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="categorias" class="form-label">Categoría actual: <strong><?= esc($categoriaActual['nombre']) ?></strong></label>
                        <select class="form-select" id="categorias" name="categorias" required>
                            <option disabled selected>Selecciona una categoría</option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= esc($categoria['id_categoria']) ?>"><?= esc($categoria['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="marcas" class="form-label">Marca actual: <strong><?= esc($marcaActual['nombre']) ?></strong></label>
                        <select class="form-select" id="marcas" name="marcas" required>
                            <option disabled selected>Selecciona una marca</option>
                            <?php foreach ($marcas as $marca): ?>
                                <option value="<?= esc($marca['id_marca']) ?>"><?= esc($marca['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="talles" class="form-label">Talle actual: <strong><?= esc($talleActual['nombre']) ?></strong></label>
                        <select class="form-select" id="talles" name="talles" required>
                            <option disabled selected>Selecciona un talle</option>
                            <?php foreach ($talles as $talle): ?>
                                <option value="<?= esc($talle['id_talle']) ?>"><?= esc($talle['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="generos" class="form-label">Género actual: <strong><?= esc($generoActual['nombre']) ?></strong></label>
                        <select class="form-select" id="generos" name="generos" required>
                            <option disabled selected>Selecciona un género</option>
                            <?php foreach ($generos as $genero): ?>
                                <option value="<?= esc($genero['id_genero']) ?>"><?= esc($genero['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="edades" class="form-label">Edad actual: <strong><?= esc($edadActual['nombre']) ?></strong></label>
                        <select class="form-select" id="edades" name="edades" required>
                            <option disabled selected>Selecciona una edad</option>
                            <?php foreach ($edades as $edad): ?>
                                <option value="<?= esc($edad['id_edad']) ?>"><?= esc($edad['nombre']) ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- TAB 2 -->
            <div class="tab-pane fade" id="stock" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="precio-costo" class="form-label">Precio de costo actual: <strong>$<?= esc($old['precio_costo']) ?></strong></label>
                        <input type="number" class="form-control" id="precio-costo" name="precio-costo" value="<?= old('precio_costo') ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="precio-venta" class="form-label">Precio de venta actual: <strong>$<?= esc($old['precio_venta']) ?></strong></label>
                        <input type="number" class="form-control" id="precio-venta" name="precio-venta" value="<?= old('precio_venta') ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock actual: <strong><?= esc($old['stock']) ?></strong></label>
                        <input type="number" class="form-control" id="stock" name="stock" value="<?= old('stock') ?>" required>
                    </div>

                    <div class="col-md-6">
                        <label for="stock-minimo" class="form-label">Stock mínimo actual: <strong><?= esc($old['stock_min']) ?></strong></label>
                        <input type="number" class="form-control" id="stock-minimo" name="stock-minimo" value="<?= old('stock_min') ?>" required>
                    </div>
                </div>
            </div>

            <!-- TAB 3 -->
            <div class="tab-pane fade" id="imagen" role="tabpanel">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <label class="form-label">Imagen actual:</label>
                    <?php if (!empty($old['imagen'])): ?>
                        <div class="d-flex justify-content-center align-items-center mb-3" style="width: 200px; height: 250px; border: 1px dashed #ccc; padding: 5px;">
                            <img src="<?= base_url('public/assets/uploads/' . esc($old['imagen'])) ?>" alt="Imagen del producto" style="width: 180px; height: 230px; object-fit: cover;">
                        </div>
                    <?php else: ?>
                        <p>No hay imagen disponible.</p>
                    <?php endif; ?>
                    <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start gap-3 mt-4">
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-save"></i> Guardar cambios</button>
            <a href="<?= site_url('/') ?>" class="btn btn-outline-danger"><i class="bi bi-x-circle"></i> Cancelar</a>
        </div>
    </form>
</div>

<!-- Asegúrate de tener Bootstrap Icons y JS -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
