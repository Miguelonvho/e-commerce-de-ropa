<div class="d-flex flex-wrap justify-content-center align-items-center gap-5">

    <?php $validation = \Config\Services::validation(); ?>
    <?php csrf_field(); ?>

    <form class="d-flex formulario flex-column gap-2 bg-black text-white p-3 my-5 rounded shadow-lg"
        action="<?= site_url('enviar-form') ?>" method="POST">

        <h1 class="fw-light mb-3">Registro</h1>

        <div class="form-floating text-secondary">
            <input placeholder="Nombre" type="text" class="form-control" id="nombre" name="nombre"
                value="<?= old('nombre') ?>" required>
            <label for="nombre">nombre</label>
            <div style="height:5vh;">
                <?php if ($validation->getError('nombre')) { ?>
                    <p class="text-danger"><?= $validation->getError('nombre') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Apellido" type="text" class="form-control" id="apellido" name="apellido"
                value="<?= old('apellido') ?>" required>
            <label for="apellido">apellido</label>
            <div style="height:5vh;">
                <?php if ($validation->getError('apellido')) { ?>
                    <p class="text-danger"><?= $validation->getError('apellido') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Correo" type="email" class="form-control" id="email" name="email"
                value="<?= old('email') ?>" required>
            <label for="email" class="form-label">Correo electrónico</label>
            <div style="height:5vh;">
                <?php if ($validation->getError('email')) { ?>
                    <p class="text-danger"><?= $validation->getError('email') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Usuario" type="text" class="form-control" id="usuario" name="usuario"
                value="<?= old('usuario') ?>" required>
            <label for="usuario" class="form-label">Usuario</label>
            <div style="height:5vh;">
                <?php if ($validation->getError('usuario')) { ?>
                    <p class="text-danger"><?= $validation->getError('usuario') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="form-floating text-secondary">
            <input placeholder="Contraseña" type="password" class="form-control" id="pass" name="pass" required>
            <label for="pass" class="form-label">Contraseña</label>
            <div style="height:5vh;">
                <?php if ($validation->getError('pass')) { ?>
                    <p class="text-danger"><?= $validation->getError('pass') ?></p>
                <?php } ?>
            </div>
        </div>

        <div class="d-flex justify-content-start">
            <button type="submit" class="btn btn-outline-light">Registrarme</button>
        </div>
        <div class="my-3">
            <p class="m-0">¿Ya se encuentra registrado?</p>
            <a href="<?= base_url('iniciarsesion_view') ?>">Iniciar sesión</a>
        </div>
    </form>
</div>