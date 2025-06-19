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
        <button class="btn btn-transparent"><img
                src="<?= base_url(relativePath: 'public/assets/img/Iconos/instagram.png') ?>" alt=""></button>
        <button class="btn btn-transparent"><img
                src="<?= base_url(relativePath: 'public/assets/img/Iconos/whatsapp.png') ?>" alt=""></button>
        <button class="btn btn-transparent"><img
                src="<?= base_url(relativePath: 'public/assets/img/Iconos/facebook.png') ?>" alt=""></button>
    </div>
    <div class="text-end text-white pe-5 mt-3">
        &copy; <?= date('Y') ?> G&G Indumentaria. Todos los derechos reservados.
    </div>
</footer>

</html>