<? ?>
<?= csrf_field() ?>

<div class="container d-flex flex-column justify-content-center align-items-center my-5">
    <form id="formulario-editar-productos" class="formulario bg-black text-white p-4 rounded shadow-lg w-100"
        style="max-width: 900px;" action="<?= site_url('editar_producto/' . $old['id_producto']) ?>" method="POST"
        enctype="multipart/form-data">
        <h1 class="fw-light mb-4 text-center">Editar producto</h1>

        <!-- Panel dinámico con tabs -->
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

            <!-- TAB 1 -->
            <div class="tab-pane fade show active" id="datos" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="nombre_prod" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="nombre_prod" name="nombre_prod"
                            value="<?= esc($old['nombre_prod']) ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="categorias" class="form-label">Categoría</label>
                        <select class="form-select" id="categorias" name="categorias">
                            <option disabled selected>Selecciona una categoría</option>
                            <?php foreach ($categorias as $categoria): ?>
                                <option value="<?= esc($categoria['id_categoria']) ?>"
                                    <?= ($categoriaActual['id_categoria'] == $categoria['id_categoria']) ? 'selected' : '' ?>>
                                    <?= esc($categoria['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="marcas" class="form-label">Marca</label>
                        <select class="form-select" id="marcas" name="marcas">
                            <option disabled selected>Selecciona una marca</option>
                            <?php foreach ($marcas as $marca): ?>
                                <option value="<?= esc($marca['id_marca']) ?>"
                                    <?= ($marcaActual['id_marca'] == $marca['id_marca']) ? 'selected' : '' ?>>
                                    <?= esc($marca['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="talles" class="form-label">Talle</label>
                        <select class="form-select" id="talles" name="talles">
                            <option disabled selected>Selecciona un talle</option>
                            <?php foreach ($talles as $talle): ?>
                                <option value="<?= esc($talle['id_talle']) ?>"
                                    <?= ($talleActual['id_talle'] == $talle['id_talle']) ? 'selected' : '' ?>>
                                    <?= esc($talle['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="generos" class="form-label">Género</label>
                        <select class="form-select" id="generos" name="generos">
                            <option disabled selected>Selecciona un género</option>
                            <?php foreach ($generos as $genero): ?>
                                <option value="<?= esc($genero['id_genero']) ?>"
                                    <?= ($generoActual['id_genero'] == $genero['id_genero']) ? 'selected' : '' ?>>
                                    <?= esc($genero['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>

                    <div class="col-md-6">
                        <label for="edades" class="form-label">Edad</label>
                        <select class="form-select" id="edades" name="edades">
                            <option disabled selected>Selecciona una edad</option>
                            <?php foreach ($edades as $edad): ?>
                                <option value="<?= esc($edad['id_edad']) ?>" <?= ($edadActual['id_edad'] == $edad['id_edad']) ? 'selected' : '' ?>>
                                    <?= esc($edad['nombre']) ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                </div>
            </div>

            <!-- TAB 2 -->
            <div class="tab-pane fade" id="stock" role="tabpanel">
                <div class="row g-4">
                    <div class="col-md-6">
                        <label for="precio_costo" class="form-label">Precio de costo</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_costo" name="precio_costo"
                                value="<?= old('precio_costo') ? formatear_numero(old('precio_costo')) : '' ?>">
                        </div>
                        
                    </div>

                    <div class="col-md-6">
                        <label for="precio_venta" class="form-label">Precio de venta</label>
                        <div class="input-group">
                            <span class="input-group-text">$</span>
                            <input type="text" class="form-control" id="precio_venta" name="precio_venta"
                                value="<?= old('precio_venta') ? formatear_numero(old('precio_venta')) : '' ?>">
                        </div>
                        
                    </div>

                    <div class="col-md-6">
                        <label for="stock" class="form-label">Stock</label>
                        <input type="number" class="form-control" id="stock" name="stock"
                            value="<?= esc($old['stock']) ?>">
                    </div>

                    <div class="col-md-6">
                        <label for="stock_min" class="form-label">Stock mínimo</label>
                        <input type="number" class="form-control" id="stock_min" name="stock_min"
                            value="<?= esc($old['stock_min']) ?>">
                    </div>
                </div>
            </div>

            <!-- TAB 3 -->
            <div class="tab-pane fade" id="imagen" role="tabpanel">
                <div class="d-flex flex-column justify-content-center align-items-center">
                    <label class="form-label">Imagen</label>
                    <?php if (!empty($old['imagen'])): ?>
                        <div class="d-flex justify-content-center align-items-center mb-3"
                            style="width: 200px; height: 250px; border: 1px dashed #ccc; padding: 5px;">
                            <img id="preview-img" src="<?= base_url('public/assets/uploads/' . esc($old['imagen'])) ?>"
                                alt="Imagen del producto" style="width: 180px; height: 230px; object-fit: cover;">
                        </div>
                    <?php else: ?>
                        <p>No hay imagen disponible.</p>
                    <?php endif; ?>
                    <input class="form-control" type="file" id="imagen" name="imagen" accept="image/*">
                </div>
            </div>
        </div>

        <div class="d-flex justify-content-start gap-3 mt-4">
            <button type="submit" class="btn btn-outline-success"><i class="bi bi-save"></i> Guardar
                cambios</button>
            <a href="<?= site_url('/crud_productos_view') ?>" class="btn btn-outline-danger"><i
                    class="bi bi-x-circle"></i>
                Cancelar</a>
        </div>
    </form>
</div>