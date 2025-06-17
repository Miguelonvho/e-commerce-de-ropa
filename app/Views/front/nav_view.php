<!-- Barra de navegacion -->
<?php
$session = session();
$perfil = $session->get('perfil_id');
?>

<section class="container-fluid p-0">
    <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
            <?php if ($perfil == 1): ?>
                <?= view('front/nav_admin') ?>
            <?php elseif ($perfil == 2): ?>
                <?= view('front/nav_usuario') ?>
                <?php else: ?>
                <?= view('front/nav_usuario') ?>
            <?php endif; ?>
    </nav>
</section>