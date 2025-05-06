<!-- Panel lateral del carrito -->
<section class="offcanvas bg-black text-white offcanvas-end" tabindex="-1" id="carritoOffcanvas" aria-labelledby="carritoOffcanvasLabel">
    <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="carritoOffcanvasLabel">Tu carrito</h5>
        <button type="button" class="btn btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
    </div>
    <div class="offcanvas-body">
        <div class="mb-3 border-bottom pb-2">
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-hombre-1.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Buzo Nike</p>
                    <small>1 x $50.500</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-hombre-2.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-hombre-3.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-hombre-4.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-mujer-1.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-mujer-1.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-mujer-3.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
            <div class="d-flex align-items-center mb-3">
                <img src="<?= base_url('public/assets/img/ropa-mujer-4.jpg') ?>" alt="Producto" class="img-fluid me-2">
                <div>
                    <p class="mb-0">Jeans Levi's</p>
                    <small>1 x $10.000</small>
                </div>
                <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
            </div>
    </div>
    <div class="d-flex justify-content-between mt-3">
        <strong>Total:</strong>
        <span>$50.500</span>
    </div>
    <div class="mt-4 d-grid gap-2">
        <a href="ruta/checkout" class="btn boton-blanco">Finalizar compra</a>
    </div>
    </div>
</section>