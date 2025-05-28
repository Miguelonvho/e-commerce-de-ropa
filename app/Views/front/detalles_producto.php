<section class="container-fluid p-5">
    <div class="row d-flex flex-column flex-md-row justify-content-center align-items-start gap-4">
        <!-- Imagen de producto -->
        <div class="col-md-6 col-12 text-center">
            <img style="width: 500px; height: 500px; image-fit: cover;" class="img-fluid"
                src="<?= base_url('public/assets/img/Remeras/Hombres/Remera-rider-hombre.jpg') ?>"
                alt="Remera de algodón relaxed fit">
        </div>

        <!-- Detalles del producto -->
        <div class="col-md-5 col-12">
            <h1 class="fw-light">Remera Rider Hombre</h1>
            <h2 class="text-success fw-bold mt-3">$105.000</h2>

            <!-- Selector de talles -->
            <div class="mt-4">
                <h5 class="fw-light">Talles:</h5>
                <div class="d-flex gap-2">
                    <button class="btn boton-transparente rounded-circle" style="width: 50px; height: 50px;">S</button>
                    <button class="btn boton-transparente rounded-circle" style="width: 50px; height: 50px;">M</button>
                    <button class="btn boton-transparente rounded-circle" style="width: 50px; height: 50px;">L</button>
                    <button class="btn boton-transparente rounded-circle" style="width: 50px; height: 50px;">XL</button>
                    <button class="btn boton-transparente rounded-circle"
                        style="width: 50px; height: 50px;">XXL</button>
                </div>
            </div>

            <!-- Opciones -->
            <div class="mt-4 d-flex align-items-center gap-3">
                <div class="input-group" style="width: 100px;">
                    <button class="btn boton-transparente" type="button">-</button>
                    <input type="text" class="form-control text-center" value="1">
                    <button class="btn boton-transparente" type="button">+</button>
                </div>
                <button class="btn btn-success px-4 fw-bold">Comprar</button>
                <button class="btn boton-negro px-4 fw-bold">
                    <img src="<?= base_url('public/assets/img/Iconos/carrito.png') ?>" class="default-icon"
                        alt="Carrito">
                    <img src="<?= base_url('public/assets/img/Iconos/carrito-negro.png') ?>" class="hover-icon"
                        alt="Carrito Hover">
                </button>
            </div>

            <!-- Medios de pago -->
            <div class="mt-5">
                <h5 class="fw-light">Medios de pago:</h5>
                <div class="d-flex flex-wrap gap-4 mt-3">
                    <div>
                        <p>Tarjetas de debito</p>
                        <img src="<?= base_url('public/assets/img/Iconos/visa.png') ?>" alt="Visa" width="35">
                        <img src="<?= base_url('public/assets/img/Iconos/mastercard.png') ?>" alt="Mastercard"
                            width="35">
                        <img src="<?= base_url('public/assets/img/Iconos/cabal.png') ?>" alt="Cabal" width="35">
                    </div>
                    <div>
                        <p>Tarjetas de credito</p>
                        <img src="<?= base_url('public/assets/img/Iconos/naranja.png') ?>" alt="Naranja" width="35">
                        <img src="<?= base_url('public/assets/img/Iconos/visa.png') ?>" alt="Visa Débito" width="35">
                    </div>
                    <div>
                        <p>Efectivo</p>
                        <img src="<?= base_url('public/assets/img/Iconos/pago-facil.svg') ?>" alt="Pago Fácil" width="35">
                        <img src="<?= base_url('public/assets/img/Iconos/rapipago.png') ?>" alt="Rapipago" width="35">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>