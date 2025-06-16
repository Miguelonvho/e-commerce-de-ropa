
<!-- Barra de navegacion -->
 <?php
$session = session();
$perfil = $session->get('perfil_id');
$nombre = $session->get('nombre');
?>

<section class="container-fluid p-0">
    <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
        <div class="container-fluid">
            <a href="<?= base_url('plantilla_principal') ?>"><img style="width: 100px"
                    src="<?= base_url('public/assets/img/Iconos/logo.png') ?>" alt="responsive"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <?php if ($perfil == 1): ?>
                <?= view('front/nav_admin') ?>
            <?php elseif ($perfil == 2): ?>
                <?= view('front/nav_usuario') ?>
            <?php else: ?>
                <?= view('front/nav_visitante') ?>
            <?php endif; ?>
        </div>
    </nav>
</section>