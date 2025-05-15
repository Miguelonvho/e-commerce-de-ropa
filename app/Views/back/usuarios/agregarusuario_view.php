<div class="d-flex justify-content-center align-items-center bg-white" style="min-height: 100vh;">
    <div class="w-50 bg-black text-white p-5 my-5 rounded shadow-lg">
        <h1 class="fw-light mb-5">Registro</h1>
        <form action="<?= site_url('usuario/agregar') ?>" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" value="<?= old('nombre') ?>" required>
                <?php if (session('errors.nombre')): ?>
                    <p class="text-danger"><?= session('errors.nombre') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" value="<?= old('apellido') ?>"
                    required>
                <?php if (session('errors.apellido')): ?>
                    <p class="text-danger"><?= session('errors.apellido') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" value="<?= old('email') ?>" required>
                <?php if (session('errors.email')): ?>
                    <p class="text-danger"><?= session('errors.email') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" value="<?= old('usuario') ?>"
                    required>
                <?php if (session('errors.usuario')): ?>
                    <p class="text-danger"><?= session('errors.usuario') ?></p>
                <?php endif; ?>
            </div>

            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
                <?php if (session('errors.pass')): ?>
                    <p class="text-danger"><?= session('errors.pass') ?></p>
                <?php endif; ?>
            </div>

            <button type="submit" class="btn mt-5 boton-blanco">Registrarme</button>
            <p class="mt-3">¿Ya se encuentra registrado? <a href="<?= base_url('iniciarsesion_view') ?>">Iniciar
                    sesión</a></p>

            <!-- Verificacion de exito o error del registro. Lanzará una alerta en verde si el usuario se registro correctamente
            de lo contrario una roja y el tipo de error -->
            <?php if (session()->getFlashdata('success')): ?>
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('success') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            <?php elseif (session()->getFlashdata('error')): ?>
                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                    <?= session()->getFlashdata('error') ?>
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Cerrar"></button>
                </div>
            <?php endif; ?>
        </form>
    </div>
</div>