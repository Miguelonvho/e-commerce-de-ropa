<section class="container-fluid p-0">
    <div class="d-flex justify-content-center align-items-center detalles-producto">
        <!-- Imagen de producto -->
        <div class="">
            <img style="width: 500px; height: 500px; object-fit: cover;" class="img-fluid img-producto"
                src="<?= base_url('public/assets/img/Remeras/Hombres/Remera-rider-hombre.jpg') ?>"
                alt="Remera de algodón relaxed fit">
        </div>

        <!-- Detalles del producto -->
        <div class="p-3">
            <h1 class="fw-light">Remera Rider Hombre</h1>
            <h2 class="text-success fw-bold mt-3">$105.000</h2>

            <!-- Selector de talles -->
            <div class="mt-4">
                <h5 class="fw-light">Talles:</h5>
                <div class="d-flex gap-2">
                    <input type="radio" class="btn-check" name="talle" id="talleS" autocomplete="off" value="S">
                    <label class="btn d-flex justify-content-center align-items-center boton-transparente rounded-circle" for="talleS"
                        style="width: 50px; height: 50px;">S</label>

                    <input type="radio" class="btn-check" name="talle" id="talleM" autocomplete="off" value="M">
                    <label class="btn d-flex justify-content-center align-items-center boton-transparente rounded-circle" for="talleM"
                        style="width: 50px; height: 50px;">M</label>

                    <input type="radio" class="btn-check" name="talle" id="talleL" autocomplete="off" value="L">
                    <label class="btn d-flex justify-content-center align-items-center boton-transparente rounded-circle" for="talleL"
                        style="width: 50px; height: 50px;">L</label>

                    <input type="radio" class="btn-check" name="talle" id="talleXL" autocomplete="off" value="XL">
                    <label class="btn d-flex justify-content-center align-items-center boton-transparente rounded-circle" for="talleXL"
                        style="width: 50px; height: 50px;">XL</label>

                    <input type="radio" class="btn-check" name="talle" id="talleXXL" autocomplete="off" value="XXL">
                    <label class="btn d-flex justify-content-center align-items-center boton-transparente rounded-circle" for="talleXXL"
                        style="width: 50px; height: 50px;">XXL</label>
                </div>
            </div>


            <!-- Opciones -->
            <div class="mt-4 d-flex flex-column align-items-start gap-3">
                <div class="d-flex align-items-center gap-3">
                    <p class="m-0">Cantidad</p>
                    <input style="width: 20%;" name="cantidad" type="number" class="form-control rounded" value="1"
                        min="1" />
                </div>
                <div class="d-flex gap-3">
                    <button style="width: 250px;" class="btn btn-success boton-comprar fw-bold rounded">Comprar</button>
                    <button class="btn boton-negro boton-carrito fw-bold rounded">
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
                            <img src="<?= base_url('public/assets/img/Iconos/visa.png') ?>" alt="Visa Débito"
                                width="35">
                        </div>
                        <div>
                            <p>Efectivo</p>
                            <img src="<?= base_url('public/assets/img/Iconos/pago-facil.svg') ?>" alt="Pago Fácil"
                                width="35">
                            <img src="<?= base_url('public/assets/img/Iconos/rapipago.png') ?>" alt="Rapipago"
                                width="35">
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>