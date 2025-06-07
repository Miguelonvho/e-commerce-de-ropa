<?php $validation = \Config\Services::validation(); ?>
<?php csrf_field(); ?>


<div class="container d-flex justify-content-center my-5">
    <form class="formulario bg-black text-white p-3 rounded shadow-lg" action="<?= site_url('editar-producto') ?>"
        enctype="multipart/form-data" method="POST">

        <h1 class="fw-light mb-4">Editar producto</h1>

        <div>
            <p><strong>Nombre actual:</strong> <?= esc($old['nombre_prod']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="nombre" type="text" class="form-control" id="nombre_prod" name="nombre-producto"
                    value="<?= set_value('nombre_prod') ?>" required>
                <label for="nombre-producto">nombre</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Categoria actual:</strong> <?= esc($categoriaActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="categorias" name="categorias" required>
                    <option disabled selected>
                        Selecciona una categoría
                    </option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= esc($categoria['id_categoria']) ?>">
                            <?= esc($categoria['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="categorias">Categorias</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Marca actual:</strong> <?= esc($marcaActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="marcas" name="marcas" required>
                    <option disabled selected>
                        Selecciona una marca
                    </option>
                    <?php foreach ($marcas as $marca): ?>
                        <option value="<?= esc($marca['id_marca']) ?>">
                            <?= esc($marca['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="marcas">marcas</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Talle actual:</strong> <?= esc($talleActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="talles" name="talles" required>
                    <option disabled selected>
                        Selecciona un talle
                    </option>
                    <?php foreach ($talles as $talle): ?>
                        <option value="<?= esc($talle['id_talle']) ?>">
                            <?= esc($talle['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="talles">talles</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Genero actual:</strong> <?= esc($generoActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="generos" name="generos" required>
                    <option disabled selected>
                        Selecciona un genero
                    </option>
                    <?php foreach ($generos as $genero): ?>
                        <option value="<?= esc($genero['id_genero']) ?>">
                            <?= esc($genero['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="generos">generos</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Edad actual:</strong> <?= esc($edadActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="edades" name="edades" required>
                    <option disabled selected>
                        Selecciona un edad
                    </option>
                    <?php foreach ($edades as $edad): ?>
                        <option value="<?= esc($edad['id_edad']) ?>">
                            <?= esc($edad['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="edades">Edades</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Precio de costo actual:</strong> $<?= esc($old['precio_costo']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="Precio de costo" type="number" class="form-control" id="precio-costo"
                    name="precio-costo" value="<?= old('precio_costo') ?>" required>
                <label for="precio-costo" class="form-label">Precio de costo</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Precio de venta actual:</strong> $<?= esc($old['precio_venta']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="Precio de venta" type="number" class="form-control" id="precio-venta"
                    name="precio-venta" value="<?= old('precio_venta') ?>" required>
                <label for="precio-venta" class="form-label">Precio de venta</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>stock actual:</strong> <?= esc($old['stock']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="Stock" type="number" class="form-control" id="stock" name="stock"
                    value="<?= old('') ?>" required>
                <label for="stock" class="form-label">stock</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>stock minimo actual:</strong> <?= esc($old['stock_min']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="Stock minimo" type="number" class="form-control" id="stock.minimo"
                    name="stock-minimo" value="<?= old('') ?>" required>
                <label for="stock-minimo" class="form-label">stock minimo</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Imagen actual:</strong></p>

            <?php if (!empty($old['imagen'])): ?>
                <img id="imagen-producto" src="<?= base_url('public/assets/img/' . esc($old['imagen'])) ?>"
                    alt="Imagen del producto"
                    style="object-fit: cover; max-width: 200px; height: 200px; margin-bottom: 20px; border: 1px dashed  #ccc; padding: 5px;">
            <?php else: ?>
                <p>No hay imagen disponible.</p>
            <?php endif; ?>

            <input class="form-control" type="file" id="input-imagen" name="imagen-producto" accept="image/*">
        </div>

        <div class="d-flex justify-content-start gap-3 mt-4">
            <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
            <button type="submit" class="btn btn-outline-danger">Cancelar</button>
        </div>
    </form>
</div>