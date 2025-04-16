   <!DOCTYPE html>
   <html lang="es">
   <!-- Barra de navegacion -->
   <section class="container-fluid p-0">
       <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
           <div class="container-fluid">
               <a href="<?= base_url('plantilla_principal') ?>"><img style="width: 100px" src="<?= base_url('public/assets/img/logo.png') ?>" alt="responsive"></a>
               <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                   aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                   <span class="navbar-toggler-icon"></span>
               </button>
               <div class="collapse navbar-collapse" id="navbarScroll">
                   <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                       <li class="nav-item dropdown">
                           <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                               Géneros
                           </a>
                           <ul class="dropdown-menu bg-black">
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_generos/Hombre') ?>">Hombre</a></li>
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_generos/Mujer') ?>">Mujer</a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                               Tipos
                           </a>
                           <ul class="dropdown-menu bg-black">
                               <li><a class="text-white dropdown-item" href="#">Remeras</a></li>
                               <li><a class="text-white dropdown-item" href="#">Buzos</a></li>
                               <li><a class="text-white dropdown-item" href="#">Pantalones</a></li>
                               <li><a class="text-white dropdown-item" href="#">Zapatillas</a></li>
                           </ul>
                       </li>
                       <li class="nav-item">
                           <a class="text-white nav-link" href="#">Niños</a>
                       </li>
                   </ul>
                   <div class="d-flex gap-2 justify-content-between" style="height: 40px;">
                       <ul class="d-flex flex-row navbar-nav">
                           <li class="nav-item">
                               <a class="btn" data-bs-toggle="offcanvas" href="#carritoOffcanvas" role="button" aria-controls="carritoOffcanvas">
                                   <img src="<?= base_url('public/assets/img/carrito-nav.png') ?>" alt="">
                               </a>
                           </li>
                           <li class="nav-item">
                               <a class="btn" href=""><img style="width: 90%;" src="<?= base_url('public/assets/img/usuario.png') ?>" alt=""></a>
                           </li>
                       </ul>
                       <form class="d-flex" role="search">
                           <input class="bg-white form-control me-2" type="search" aria-label="Search">
                           <button class="btn btn-outline-light" type="submit">Buscar</button>
                       </form>
                   </div>
               </div>
           </div>
       </nav>
   </section>
   <!-- Panel lateral del carrito (offcanvas) -->
   <section class="offcanvas bg-black text-white offcanvas-end" tabindex="-1" id="carritoOffcanvas" aria-labelledby="carritoOffcanvasLabel">
       <div class="offcanvas-header">
           <h5 class="offcanvas-title" id="carritoOffcanvasLabel">Tu carrito</h5>
           <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Cerrar"></button>
       </div>
       <div class="offcanvas-body">
           <div class="mb-3 border-bottom pb-2">
               <div class="d-flex align-items-center">
                   <img src="public/assets/img/buzo-Nike.jpg" alt="Producto" class="img-fluid me-2" style="width: 60px;">
                   <div>
                       <p class="mb-0">Buzo Nike</p>
                       <small>1 x $50.500</small>
                   </div>
                   <button class="btn btn-sm btn-danger ms-auto">Eliminar</button>
               </div>
           </div>
           <div class="d-flex justify-content-between mt-3">
               <strong>Total:</strong>
               <span>$3.500</span>
           </div>
           <div class="mt-4 d-grid gap-2">
               <a href="ruta/carrito" class="btn btn-outline-light">Ver carrito</a>
               <a href="ruta/checkout" class="btn btn-success">Finalizar compra</a>
           </div>
       </div>
   </section>

   </html>