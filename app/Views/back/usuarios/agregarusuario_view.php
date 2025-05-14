<div class="d-flex justify-content-center align-items-center bg-white">
    <div class="w-50 bg-black text-white p-5 my-5 rounded shadow-lg">
        <h1 class="fw-light mb-5">Registro</h1>
        <form action="<?= site_url('usuario/agregar') ?>" method="POST">
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>
            <div class="mb-3">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>
            <div class="mb-3">
                <label for="email" class="form-label">Correo electrónico</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="usuario" class="form-label">Usuario</label>
                <input type="text" class="form-control" id="usuario" name="usuario" required>
            </div>
            <div class="mb-3">
                <label for="pass" class="form-label">Contraseña</label>
                <input type="password" class="form-control" id="pass" name="pass" required>
            </div>
            <button type="submit" class="btn mt-5 boton-blanco">Registrarme</button>
            <p class="mt-3">¿Ya se encuentra registrado? <a href="<?= base_url('iniciarsesion_view') ?>">Iniciar sesión</a></p>
        </form>
    </div>
    <?php if (session()->getFlashdata('mensaje')): ?>

    <?php else: ?>

    <?php endif; ?>
</div>