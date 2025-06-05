<div class="d-flex flex-wrap justify-content-center align-items-center gap-5">

    <form class="d-flex formulario flex-column gap-2 bg-black text-white p-3 my-5 rounded shadow-lg"
        action="<?= site_url('enviar-form') ?>" method="POST">

        <h1 class="fw-light mb-3">Editar producto</h1>

        <div class="form-floating text-secondary">
            <input placeholder="" type="text" class="form-control" id="" name="" value="<?= old('') ?>" required>
            <label for="">nombre</label>
            <div style="height:5vh;">

            </div>
        </div>

        <div class="form-floating text-secondary">
            <select class="form-select" id="" name="" required>
                <option value="" disabled selected>Selecciona una categoría</option>
                <option value="remera" <?= old('') == 'remera' ? 'selected' : '' ?>>Remera</option>
                <option value="pantalon" <?= old('') == 'pantalon' ? 'selected' : '' ?>>Pantalón</option>
                <option value="buzo" <?= old('') == 'buzo' ? 'selected' : '' ?>>Buzo</option>
                <option value="remera mangas largas" <?= old('') == 'remera mangas largas' ? 'selected' : '' ?>>
                    Remera mangas largas</option>
            </select>
            <label for="">Categoría</label>
            <div style="height:5vh;">

            </div>
        </div>

        <div class="form-floating text-secondary">
            <select class="form-select" id="" name="" required>
                <option value="" disabled selected>Selecciona una marca</option>
                <option value="Huapi" <?= old('') == 'Huapi' ? 'selected' : '' ?>>Huapi</option>
                <option value="Nike" <?= old('') == 'Nike' ? 'selected' : '' ?>>Nike</option>
                <option value="Adidas" <?= old('') == 'Adidas' ? 'selected' : '' ?>>Adidas</option>
            </select>
            <label for="">Marcas</label>
            <div style="height:5vh;">

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

        <div class="form-floating text-secondary">
            <input type="file" class="form-control p-3" id="imagen" name="imagen" accept="image/*" required>
            <div style="height:5vh;">

            </div>
        </div>


        <div class="d-flex justify-content-start gap-3">
            <button type="submit" class="btn btn-outline-success">Guardar cambios</button>
            <button type="submit" class="btn btn-outline-danger">Cancelar</button>
        </div>
    </form>
</div>