<div class="d-flex flex-wrap justify-content-center align-items-center gap-5" style="height: 600px">

    <?php $validation = \Config\Services::validation(); ?> 
    <?php csrf_field(); ?>

    <form class="d-flex formulario mx-5 flex-column gap-2 bg-black text-white p-3 my-5 rounded shadow-lg"
        action="<?= site_url('enviarlogin') ?>" style="margin-bottom: 100px" method="POST">

        <h1 class="fw-light mb-3">Iniciar sesión</h1>

        <!-- Campo: Usuario -->
        <div class="form-floating text-secondary">
            <input placeholder="Usuario" type="usuario" class="form-control" id="usuario" name="usuario"
                value="<?= old('usuario') ?>"> <!-- Mantiene el valor ingresado si hay error -->
            <label for="usuario" class="form-label">Usuario</label>
            <div style="height:5vh;">
                <!-- Mensaje de error específico para usuario -->
                <?php if (session()->getFlashdata('error_usuario')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_usuario') ?></p>
                <?php } ?>
            </div>
        </div>

        <!-- Campo: Contraseña -->
        <div class="form-floating text-secondary">
            <input placeholder="Contraseña" type="password" class="form-control" id="pass" name="pass">
            <label for="pass" class="form-label">Contraseña</label>
            <div style="height:5vh;">
                <!-- Mensaje de error específico para contraseña -->
                <?php if (session()->getFlashdata('error_password')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_password') ?></p>
                <?php } ?>
            </div>
        </div>

        <!-- Botón para enviar el formulario -->
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-outline-light">Ingresar</button>
        </div>

        <!-- Enlace para usuarios nuevos -->
        <div class="my-3">
            <p class="m-0">¿No tenés cuenta?</p>
            <a href="<?= base_url('agregarusuario_view') ?>">Registrarme</a>
        </div>
    </form>
</div>