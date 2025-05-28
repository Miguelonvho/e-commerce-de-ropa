<body>
    <h1 class="m-4 fw-light text-center">Mi información</h1>
    <div class="d-flex justify-content-center">
        <div class="mx-5 w-75 rounded shadow-lg bg-black text-white p-5">
            <div class="container-img-perfil mb-4">
                <img class="img-perfil" src="<?= base_url('public/assets/img/Iconos/sin-usuario.png') ?>" alt="">
            </div>
            <hr>
            <p>Nombre completo:</p>
            <p class="fst-italic"><?= esc($usuario['nombre']) . ' ' . esc($usuario['apellido']) ?></p>
            <hr>
            <p>Email:</p>
            <p class="fst-italic"><?= esc($usuario['email']) ?></p>
            <hr>
            <p>Usuario:</p>
            <p class="fst-italic"><?= esc($usuario['usuario']) ?></p>
            <hr>
            <form action="<?= base_url('perfil/eliminar') ?>" method="post" onsubmit="return confirm('¿Estás seguro que querés eliminar tu cuenta? Esta acción es irreversible.')">
                <button type="submit" class="btn mt-4 btn-danger">Eliminar cuenta</button>
            </form>
        </div>
    </div>
</body>
