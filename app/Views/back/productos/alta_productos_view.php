<?php if (!isset($validation)) {
    $validation = \Config\Services::validation(); // Obtiene el servicio de validación si no está definido
} ?>

<?= csrf_field() ?> <!-- Protege el formulario contra CSRF -->

<?php
// Función auxiliar para formatear números con coma y punto como separadores
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

        <!-- Muestra un toast de error si hay errores de validación -->
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

        <!-- Navegación por pestañas -->
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

        <!-- Contenido de las pestañas -->
        <div class="tab-content d-flex justify-content-center align-items-center border p-5" id="productTabContent"
            style="height: 400px;">

            <!-- TAB 1: Datos principales -->
            <div class="tab-pane fade show active" id="datos" role="tabpanel">
                <div class="row g-4">
                    <!-- Campo: Nombre del producto -->
                    <div class="col-md-6">
                        <label for="nombre_prod" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_prod" name="nombre_prod"
                            value="<?= set_value('nombre_prod') ?>">
                        <?= $validation->showError('nombre_prod') ?>
                    </div>

                    <!-- Selects para categoría, marca, talle, género, edad -->
                    <?php
                    $inputs = [
                        'categorias' => $categorias,
                        'marcas' => $marcas,
                        'talles' => $talles,
                        'generos' => $generos,
                        'edades' => $edades
                    ];

                    foreach ($inputs as $name => $list): ?>
                        <div class="col-md-6">
                            <label for="<?= $name ?>" class="form-label"><?= ucfirst($name) ?></label>
                            <select class="form-select" id="<?= $name ?>" name="<?= $name ?>">
                                <option disabled selected>Selecciona <?= strtolower($name) ?></option>
                                <?php foreach ($list as $item): ?>
                                    <?php
                                    $idKey = array_key_first($item);
                                    $valueKey = array_keys($item)[1];
                                    ?>
                                    <option value="<?= esc($item[$idKey]) ?>" <?= set_select($name, $item[$idKey]) ?>>
                                        <?= esc($item[$valueKey]) ?>
                                    </option>
                                <?php endforeach; ?>
                            </select>
                            <?= $validation->showError($name) ?>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>

            <!-- TAB 2: Stock y precios -->
            <div class="tab-pane fade" id="stock" role="tabpanel">
                <div class="row g-4">
                    <!-- Campo: Precio de costo -->
                    <div class="col-md-6">
                        <label for="precio_costo" class="form-label">Precio de costo</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_costo" name="precio_costo"
                                value="<?= old('precio_costo') ? formatear_numero(old('precio_costo')) : '' ?>">
                        </div>
                        <?= $validation->showError('precio_costo') ?>
                    </div>

                    <!-- Campo: Precio de venta -->
                    <div class="col-md-6">
                        <label for="precio_venta" class="form-label">Precio de venta</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_venta" name="precio_venta"
                                value="<?= old('precio_venta') ? formatear_numero(old('precio_venta')) : '' ?>">
                        </div>
                        <?= $validation->showError('precio_venta') ?>
                    </div>

                    <!-- Campo: Stock mínimo -->
                    <div class="col-md-6">
                        <label for="stock_min" class="form-label">Stock mínimo</label>
                        <input type="number"
                            class="form-control <?= $validation->hasError('stock_min') ? 'is-invalid' : '' ?>"
                            id="stock_min" name="stock_min" min="0" value="<?= set_value('stock_min') ?>">
                        <div class="invalid-feedback">
                            <?= $validation->showError('stock_min') ?>
                        </div>
                    </div>

                    <!-- Campo: Stock actual -->
                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number"
                            class="form-control <?= $validation->hasError('stock') ? 'is-invalid' : '' ?>" id="stock"
                            name="stock" min="0" value="<?= set_value('stock') ?>">
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
                        <!-- Imagen por defecto de vista previa -->
                        <img id="preview-img" src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>"
                            alt="Imagen de vista previa" style="width: 180px; height: 230px; object-fit: cover;">
                    </div>
                    <!-- Campo de carga de imagen -->
                    <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
                    <?= $validation->showError('imagen') ?>
                </div>
            </div>
        </div>

        <!-- Botones: Guardar o Cancelar -->
        <div class="d-flex justify-content-start gap-3 mt-4">
            <button type="submit" class="btn btn-outline-success">
                <i class="bi bi-save"></i> Guardar producto
            </button>
            <a href="<?= site_url('/crud_productos_view') ?>" class="btn btn-outline-danger">
                <i class="bi bi-x-circle"></i> Cancelar
            </a>
        </div>
    </form>
</div>