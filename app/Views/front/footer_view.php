<!DOCTYPE html>
<html lang="es">
<body>
    <!-- Footer -->
    <footer class="bg-black pb-5" data-bs-theme="dark">
        <div class="d-flex flex-wrap justify-content-center m-0 p-5 gap-5">
            <a class="text-white" href="<?= base_url('quienes_somos') ?>">Quienes somos</a>
            <a class="text-white" href="<?= base_url('comercializacion') ?>">Comercialización</a>
            <a class="text-white" href="<?= base_url('contacto') ?>">Contacto</a>
            <a class="text-white" href="<?= base_url('terminos_y_usos') ?>">Terminos y Usos</a>
        </div>
        <div class="d-flex flex-wrap justify-content-center gap-3 p-0">
            <button class="btn btn-transparent"><img src="<?= base_url(relativePath: 'public/assets/img/instagram.png') ?>" alt=""></button>
            <button class="btn btn-transparent"><img src="<?= base_url(relativePath: 'public/assets/img/whatsapp.png') ?>" alt=""></button>
            <button class="btn btn-transparent"><img src="<?= base_url(relativePath: 'public/assets/img/facebook.png') ?>" alt=""></button>
        </div>
    </footer>
</body>
</html>