<?php $validation = session('validation'); ?>

<form action="<?= site_url('editar_perfil') ?>" enctype="multipart/form-data" method="POST">
    <h1 class="m-4 fw-light text-center">Mi información</h1>
    <div class="d-flex justify-content-center">
        <div class="mx-5 w-75 rounded shadow-lg bg-black text-white p-5">

            <!-- Imagen -->
            <div class="container-img-perfil mb-4">
                <img class="img-perfil" src="<?= base_url('public/assets/img/Iconos/sin-usuario.png') ?>" alt="">
            </div>

            <hr>

            <!-- Nombre -->
            <label for="nombre_prod" class="form-label">Nombre</label>
            <div class="input-group">
                <input type="text"
                    class="form-control bg-black text-white border-0 <?= $validation && $validation->hasError('nombre_prod') ? 'is-invalid' : '' ?>"
                    id="nombre_prod" name="nombre_prod" value="<?= old('nombre_prod', esc($usuario['nombre'])) ?>"
                    readonly data-original="<?= esc($usuario['nombre']) ?>">
                <button type="button" class="edit-btn" onclick="habilitarCampo('nombre_prod')">
                    <i class="bi bi-pencil"></i>
                </button>
            </div>
            <?php if ($validation && $validation->hasError('nombre_prod')): ?>
                <div class="text-danger">
                    <?= $validation->getError('nombre_prod') ?>
                </div>
            <?php endif; ?>

            <hr>

            <!-- Email -->
            <label for="email" class="form-label">Email</label>
            <div class="input-group">
                <input type="email" class="form-control bg-black text-white border-0" id="email" name="email"
                    value="<?= esc($usuario['email']) ?>" readonly data-original="<?= esc($usuario['email']) ?>">
                <button type="button" class="edit-btn" onclick="habilitarCampo('email')">
                    <i class="bi bi-pencil"></i>
                </button>
            </div>

            <hr>

            <!-- Usuario -->
            <label for="usuario" class="form-label">Usuario</label>
            <div class="input-group">
                <input type="text" class="form-control bg-black text-white border-0" id="usuario" name="usuario"
                    value="<?= esc($usuario['usuario']) ?>" readonly data-original="<?= esc($usuario['usuario']) ?>">
                <button type="button" class="edit-btn" onclick="habilitarCampo('usuario')">
                    <i class="bi bi-pencil"></i>
                </button>
            </div>

            <hr>

            <!-- Botones -->
            <div class="d-flex justify-content-between">
                <button type="submit" class="btn btn-success" id="guardarBtn" disabled>Guardar cambios</button>

                <button type="submit" formaction="<?= base_url('perfil/eliminar') ?>" formmethod="post"
                    class="btn btn-danger"
                    onclick="return confirm('¿Estás seguro que querés eliminar tu cuenta? Esta acción es irreversible.')">
                    Eliminar cuenta
                </button>
            </div>
        </div>
    </div>
</form>