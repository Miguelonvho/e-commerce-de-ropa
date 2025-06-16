<?php
$session = session();
$perfil = $session->get('perfil_id');
$nombre = $session->get('nombre');
?>

<div class="collapse navbar-collapse" id="navbarScroll">
    <ul class="navbar-nav nav-underline me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('') ?>">Principal</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('') ?>">CRUD Usuarios</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('') ?>">CRUD Productos</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('') ?>">Ventas</a>
        </li>
        <li class="nav-item">
            <a class="nav-link text-white" href="<?= base_url('') ?>">Consultas</a>
        </li>
    </ul>

   
    <div class="d-flex gap-4 align-items-center">
        <div class="nav-item dropdown">
            <a class="btn m-0 p-0" data-bs-toggle="dropdown" aria-expanded="false" href="#">
                <img class="nav-img" src="<?= base_url('public/assets/img/Iconos/usuario.png') ?>" alt="Usuario">
            </a>
            <ul id="info-sesion" class="dropdown-menu dropdown-menu-end bg-black my-2 p-4" style="min-width: 250px;">
                <li class="d-flex justify-content-between align-items-center p-0">
                    <h4 class="m-0">Mi cuenta</h4>
                    <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="dropdown" aria-label="Cerrar"></button>
                </li>
                <hr>
                <li class="d-flex justify-content-center">
                    <div class="d-flex gap-4 align-items-center">
                        <img style="width: 90px; height: 90px; object-fit: cover; border-radius: 100%;"
                            src="<?= base_url('public/assets/img/Iconos/sin-usuario.png') ?>" alt="">
                    </div>
                </li>
                <li class="text-white text-center mt-3">
                    <p class="m-0 fw-bold"><?= session()->get('nombre') ?> <?= session()->get('apellido') ?></p>
                    <p class="m-0"><?= session()->get('email') ?></p>
                </li>
                <li class="d-flex justify-content-center gap-3 mt-3">
                    <a href="<?= base_url('plantilla_perfil') ?>" class="btn btn-outline-light">
                        Ver perfil
                    </a>
                    <a href="<?= base_url('logout') ?>" class="btn btn-outline-light">
                        Cerrar sesión
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
