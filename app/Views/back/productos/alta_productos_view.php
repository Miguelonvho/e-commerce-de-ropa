<?php if (!isset($validation)) {
    $validation = \Config\Services::validation();
} ?>

<?= csrf_field() ?>

<?php
if (!function_exists('formatear_numero')) {
    function formatear_numero($valor)
    {
        return number_format((float) $valor, 2, ',', '.');
    }
}
?>


<div class="container d-flex flex-column justify-content-center align-items-center my-5">
    <form id="formulario-alta-productos" class="formulario bg-black text-white p-4 rounded shadow-lg w-100"
        style="max-width: 900px;" action="<?= site_url('alta_producto') ?>" method="POST" enctype="multipart/form-data">

        <h1 class="fw-light mb-4 text-center">Alta de Producto</h1>
        <?php if (isset($validation) && $validation->getErrors()): ?>
            <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
                <div id="toastError" class="toast align-items-center text-bg-danger border-0" role="alert"
                    aria-live="assertive" aria-atomic="true">
                    <div class="d-flex">
                        <div class="toast-body">
                            Debe completar todos los campos
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>

        <ul class="nav nav-tabs mb-4" id="productTab" role="tablist">
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form active" id="datos-tab" data-bs-toggle="tab" data-bs-target="#datos"
                    type="button" role="tab">Datos principales</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form" id="stock-tab" data-bs-toggle="tab" data-bs-target="#stock"
                    type="button" role="tab">Stock y precios</button>
            </li>
            <li class="nav-item" role="presentation">
                <button class="nav-link nav-form" id="imagen-tab" data-bs-toggle="tab" data-bs-target="#imagen"
                    type="button" role="tab">Imagen</button>
            </li>
        </ul>

        <div class="tab-content d-flex justify-content-center align-items-center border p-5" id="productTabContent"
            style="height: 400px;">

            <!-- TAB 1: Datos -->
            <div class="tab-pane fade show active" id="datos" role="tabpanel">
                <div class="row g-4">

                    <div class="col-md-6">
                        <label for="nombre_prod" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_prod" name="nombre_prod"
                            value="<?= set_value('nombre_prod') ?>">
                        <?= $validation->showError('nombre_prod') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="categorias" class="form-label">Categoría</label>
                        <select class="form-select" id="categorias" name="categorias">
                            <option disabled selected>Selecciona una categoría</option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= esc($categoria['id_categoria']) ?>" <?= set_select('categorias', $categoria['id_categoria']) ?>>
                                    <?= esc($categoria['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= $validation->showError('categorias') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="marcas" class="form-label">Marca</label>
                        <select class="form-select" id="marcas" name="marcas">
                            <option disabled selected>Selecciona una marca</option>
                            <?php foreach ($marcas as $marca): ?>
                                <option value="<?= esc($marca['id_marca']) ?>" <?= set_select('marcas', $marca['id_marca']) ?>>
                                    <?= esc($marca['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= $validation->showError('marcas') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="talles" class="form-label">Talle</label>
                        <select class="form-select" id="talles" name="talles">
                            <option disabled selected>Selecciona un talle</option>
                            <?php foreach ($talles as $talle): ?>
                                <option value="<?= esc($talle['id_talle']) ?>" <?= set_select('talles', $talle['id_talle']) ?>>
                                    <?= esc($talle['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= $validation->showError('talles') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="generos" class="form-label">Género</label>
                        <select class="form-select" id="generos" name="generos">
                            <option disabled selected>Selecciona un género</option>
                            <?php foreach ($generos as $genero): ?>
                                <option value="<?= esc($genero['id_genero']) ?>" <?= set_select('generos', $genero['id_genero']) ?>>
                                    <?= esc($genero['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= $validation->showError('generos') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="edades" class="form-label">Edad</label>
                        <select class="form-select" id="edades" name="edades">
                            <option disabled selected>Selecciona una edad</option>
                            <?php foreach ($edades as $edad): ?>
                                <option value="<?= esc($edad['id_edad']) ?>" <?= set_select('edades', $edad['id_edad']) ?>>
                                    <?= esc($edad['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                        <?= $validation->showError('edades') ?>
                    </div>

                </div>
            </div>

            <!-- TAB 2: Stock -->
            <div class="tab-pane fade" id="stock" role="tabpanel">
                <div class="row g-4">

                    <div class="col-md-6">
                        <label for="precio_costo" class="form-label">Precio de costo</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_costo" name="precio_costo"
                                value="<?= old('precio_costo') ? formatear_numero(old('precio_costo')) : '' ?>">
                        </div>
                        <?= $validation->showError('precio_costo') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="precio_venta" class="form-label">Precio de venta</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_venta" name="precio_venta"
                                value="<?= old('precio_venta') ? formatear_numero(old('precio_venta')) : '' ?>">
                        </div>
                        <?= $validation->showError('precio_venta') ?>
                    </div>

                    <div class="col-md-6">
                        <label for="stock_min" class="form-label">Stock mínimo</label>
                        <input type="number"
                            class="form-control <?= $validation->hasError('stock_min') ? 'is-invalid' : '' ?>"
                            id="stock_min" name="stock_min" min="0" value="<?= set_value('stock_min') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->showError('stock_min') ?>
                        </div>
                    </div>

                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number"
                            class="form-control <?= $validation->hasError('stock') ? 'is-invalid' : '' ?>" id="stock"
                            name="stock" min="<?= set_value('stock_min') !== '' ? set_value('stock_min') : 0 ?>"
                            value="<?= set_value('stock') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->showError('stock') ?>
                        </div>
                    </div>

                </div>
            </div>

            <!-- TAB 3: Imagen -->
            <div class="tab-pane fade" id="imagen" role="tabpanel">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <label class="form-label">Imagen</label>
                    <div class="d-flex justify-content-center align-items-center mb-3"
                        style="width: 200px; height: 250px; border: 1px dashed #ccc; padding: 5px;">
                        <img id="preview-img" src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>"
                            alt="Imagen de vista previa" style="width: 180px; height: 230px; object-fit: cover;">
                    </div>
                    <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
                    <?= $validation->showError('imagen') ?>
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start gap-3 mt-4">
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-save"></i> Guardar producto</button>
            <a href="<?= site_url('/crud_productos_view') ?>" class="btn btn-outline-danger"><i
                    class="bi bi-x-circle"></i> Cancelar</a>
        </div>
    </form>
</div>