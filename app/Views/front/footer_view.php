<!-- Footer -->
<footer class="bg-black pb-5 footer-al-fondo" data-bs-theme="dark">
    <?php if (session()->getFlashdata('success')): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
            <div id="toastSuccess" class="toast align-items-center text-bg-success border-0" role="alert"
                aria-live="assertive" aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?= session()->getFlashdata('success') ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php if (session()->getFlashdata('error')): ?>
        <div class="toast-container position-fixed bottom-0 end-0 p-3" style="z-index: 1080;">
            <div id="toastError" class="toast align-items-center text-bg-danger border-0" role="alert" aria-live="assertive"
                aria-atomic="true">
                <div class="d-flex">
                    <div class="toast-body">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endif; ?>
    <div class="d-flex flex-wrap justify-content-center m-0 p-5 gap-5">
        <a class="text-white" href="<?= base_url('quienes_somos') ?>">Quienes somos</a>
        <a class="text-white" href="<?= base_url('comercializacion') ?>">Comercialización</a>
        <a class="text-white" href="<?= base_url('contacto') ?>">Contacto</a>
        <a class="text-white" href="<?= base_url('terminos_y_usos') ?>">Terminos y Usos</a>
    </div>
    <div class="d-flex flex-wrap justify-content-center gap-3 p-0">
        <!-- Botón a Instagram -->
        <a href="https://www.instagram.com/tu_usuario" target="_blank" class="btn btn-transparent">
            <img src="<?= base_url('public/assets/img/Iconos/instagram.png') ?>" alt="Instagram">
        </a>

        <!-- Botón a WhatsApp (con número predeterminado) -->
        <a href="https://wa.me/5491234567890" target="_blank" class="btn btn-transparent">
            <img src="<?= base_url('public/assets/img/Iconos/whatsapp.png') ?>" alt="WhatsApp">
        </a>

        <!-- Botón a Facebook -->
        <a href="https://www.facebook.com/tu_pagina" target="_blank" class="btn btn-transparent">
            <img src="<?= base_url('public/assets/img/Iconos/facebook.png') ?>" alt="Facebook">
        </a>
    </div>

    <div class="text-end text-white pe-5 mt-3">
        &copy; <?= date('Y') ?> G&G Indumentaria. Todos los derechos reservados.
    </div>
</footer>

</html>