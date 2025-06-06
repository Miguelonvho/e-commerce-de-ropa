<div class="container d-flex justify-content-center my-5">
    <form class="formulario bg-black text-white p-3 rounded shadow-lg" action="<?= site_url('enviar-form') ?>"
        method="POST">

        <h1 class="fw-light mb-4">Editar producto</h1>

        <div>
            <p><strong>Nombre actual:</strong> <?= esc($old['nombre_prod']) ?></p>
            <div class="form-floating text-secondary">
                <input placeholder="Precio de costo" type="text" class="form-control" id="nombre_prod"
                    name="nombre_prod" value="<?= old('nombre_prod') ?>" required>
                <label for="">nombre</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Categoria actual:</strong> <?= esc($categoriaActual['nombre']) ?></p>
            <div class="form-floating">
                <select class="form-select" id="categoria" name="categoria" required>
                    <option disabled selected>
                        Selecciona una categoría
                    </option>
                    <?php foreach ($categorias as $categoria): ?>
                        <option value="<?= esc($categoria['id_categoria']) ?>">
                            <?= esc($categoria['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="">Categorias</label>
            </div>
        </div>

        <div class="mt-4">
            <p><strong>Marca actual:</strong> <?= esc($marcaActual['nombre']) ?></p>
            <div class="form-floating">   
                <select class="form-select" id="marca" name="marca" required>
                    <option disabled selected>
                        Selecciona una marca
                    </option>
                    <?php foreach ($marcas as $marca): ?>
                        <option value="<?= esc($marca['id_marca']) ?>">
                            <?= esc($marca['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="">marcas</label>
            </div>
        </div>

         <div class="mt-4">
            <p><strong>Talle actual:</strong> <?= esc($talleActual['nombre']) ?></p>
            <div class="form-floating">   
                <select class="form-select" id="talle" name="talle" required>
                    <option disabled selected>
                        Selecciona un talle
                    </option>
                    <?php foreach ($talles as $talle): ?>
                        <option value="<?= esc($talle['id_talle']) ?>">
                            <?= esc($talle['nombre']) ?>
                        </option>
                    <?php endforeach; ?>
                </select>
                <label for="">talles</label>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Precio de costo" type="text" class="form-control" id="" name="" value="<?= old('') ?>"
                required>
            <label for="" class="form-label">Precio de costo</label>
            <div style="height:5vh;">

            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Precio de venta" type="text" class="form-control" id="" name="" value="<?= old('') ?>"
                required>
            <label for="" class="form-label">Precio de venta</label>
            <div style="height:5vh;">

            </div>
        </div>

        <div class="mb-4">
            <label for="imagenProducto" class="form-label">Imagen del producto</label>
            <input class="form-control" type="file" id="imagenProducto" name="imagen" accept="image/*">
        </div>

        <div class="d-flex justify-content-start gap-3">
            <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
            <button type="submit" class="btn btn-outline-danger">Cancelar</button>
        </div>
    </form>
</div>