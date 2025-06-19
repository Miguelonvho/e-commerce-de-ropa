<div class="d-flex flex-wrap justify-content-center align-items-center gap-5" style="height: 600px">

    <?php $validation = \Config\Services::validation(); ?>
    <?php csrf_field(); ?>

    <form class="d-flex formulario mx-5 flex-column gap-2 bg-black text-white p-3 my-5 rounded shadow-lg"
        action="<?= site_url('enviarlogin') ?>" style="margin-bottom: 100px" method="POST">

        <h1 class="fw-light mb-3">Iniciar sesión</h1>

        <div class="form-floating text-secondary">
            <input placeholder="Correo" type="email" class="form-control" id="email" name="email"
                value="<?= old('email') ?>">
            <label for="email" class="form-label">Correo electrónico</label>
            <div style="height:5vh;">
                <?php if (session()->getFlashdata('error_email')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_email') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Contraseña" type="password" class="form-control" id="pass" name="pass">
            <label for="pass" class="form-label">Contraseña</label>
            <div style="height:5vh;">
                <?php if (session()->getFlashdata('error_password')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_password') ?></p>
                <?php } ?>
            </div>
        </div>
        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-outline-light">Ingresar</button>
        </div>
        <div class="my-3">
            <p class="m-0">¿No tenés cuenta?</p>
            <a href="<?= base_url('agregarusuario_view') ?>">Registrarme</a>
        </div>
    </form>
</div>