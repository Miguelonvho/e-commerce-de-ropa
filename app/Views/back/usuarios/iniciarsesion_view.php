<div class="d-flex flex-wrap justify-content-center align-items-center gap-5">

    <?php $validation = \Config\Services::validation(); ?>
    <?php csrf_field(); ?>

    <form style="width:60vw;" class="d-flex mx-5 flex-column gap-2 h-25 bg-black text-white p-3 my-5 rounded shadow-lg"
        action="<?= site_url('enviarlogin') ?>" method="POST">

        <h1 class="fw-light mb-3">Iniciar sesión</h1>

        <div class="form-floating text-secondary">
            <input placeholder="Correo" type="email" class="form-control" id="email" name="email"
                value="<?= old('email') ?>" required>
            <label for="email" class="form-label">Correo electrónico</label>
            <div style="height:5vh;">
                <?php if (session()->getFlashdata('error_email')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_email') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Contraseña" type="password" class="form-control" id="pass" name="pass" required>
            <label for="pass" class="form-label">Contraseña</label>
            <div style="height:5vh;">
                <?php if (session()->getFlashdata('error_password')) { ?>
                    <p class="text-danger"><?= session()->getFlashdata('error_password') ?></p>
                <?php } ?>
            </div>
        </div>

        <button type="submit" class="btn btn-outline-light">Ingresar</button>
        <div class="my-3">
            <p class="m-0">¿No tenés cuenta?</p>
            <a href="<?= base_url('agregarusuario_view') ?>">Registrarme</a>
        </div>

        <?php if (session()->getFlashdata('success')): ?>
            <div class="position-fixed top-0 start-50 translate-middle-x p-3 w-100"
                style="max-width: 500px; z-index: 1100;">
                <div id="liveToast" class="toast show text-black w-100" role="alert" aria-live="assertive"
                    aria-atomic="true" data-bs-delay="3000">
                    <div
                        class="toast-body bg-light border rounded shadow-sm d-flex justify-content-center align-items-center text-center">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </form>
</div>