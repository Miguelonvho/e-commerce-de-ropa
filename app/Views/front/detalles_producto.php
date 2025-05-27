<section class="container-fluid p-5">
    <div class="row d-flex flex-column flex-md-row justify-content-center align-items-start gap-4">
        <!-- Imagen de producto -->
        <div class="col-md-6 col-12 text-center">
            <img style="width: 600px; height: auto;" class="img-fluid"
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
                    <button class="btn boton-blanco rounded-pill">S</button>
                    <button class="btn boton-blanco rounded-pill">M</button>
                    <button class="btn boton-blanco rounded-pill">L</button>
                    <button class="btn boton-blanco rounded-pill">XL</button>
                    <button class="btn boton-blanco rounded-pill">XXL</button>
                </div>
            </div>

            <!-- Cantidad y botón -->
            <div class="mt-4 d-flex align-items-center gap-3">
                <div class="input-group" style="width: 100px;">
                    <button class="btn boton-blanco" type="button">-</button>
                    <input type="text" class="form-control text-center" value="1">
                    <button class="btn boton-blanco" type="button">+</button>
                </div>
                <button class="btn boton-negro px-4 fw-bold">Añadir al carrito</button>
                <button class="btn boton-negro px-4 fw-bold">Comprar</button>
            </div>

            <!-- Medios de pago -->
            <div class="mt-5">
                <h5 class="fw-light">Medios de pago:</h5>
                <div class="d-flex flex-wrap gap-3 mt-3">
                    <div>
                        <p>Tarjetas de debito</p>
                        <img src="<?= base_url('public/assets/img/pagos/visa.png') ?>" alt="Visa" width="50">
                        <img src="<?= base_url('public/assets/img/pagos/mastercard.png') ?>" alt="Mastercard"
                            width="50">
                        <img src="<?= base_url('public/assets/img/pagos/cabal.png') ?>" alt="Cabal" width="50">
                    </div>
                    <div>
                        <p>Tarjetas de credito</p>
                        <img src="<?= base_url('public/assets/img/pagos/naranja.png') ?>" alt="Naranja" width="50">
                        <img src="<?= base_url('public/assets/img/pagos/visa.png') ?>" alt="Visa Débito" width="50">
                    </div>
                    <div>
                        <p>Efectivo</p>
                        <img src="<?= base_url('public/assets/img/pagos/pagofacil.png') ?>" alt="Pago Fácil" width="50">
                        <img src="<?= base_url('public/assets/img/pagos/rapipago.png') ?>" alt="Rapipago" width="50">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>