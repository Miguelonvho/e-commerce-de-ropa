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
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Hombre') ?>">Hombre</a></li>
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Mujer') ?>">Mujer</a></li>
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Ninos') ?>">Niños</a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                           <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                               aria-expanded="false">
                               Productos
                           </a>
                           <ul class="dropdown-menu bg-black">
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Remeras') ?>">Remeras</a></li>
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Buzos') ?>">Buzos</a></li>
                               <li><a class="text-white dropdown-item" href="<?= base_url('plantilla_productos/Pantalones') ?>">Pantalones</a></li>
                           </ul>
                       </li>
                       <li class="nav-item dropdown">
                            <a class="text-white nav-link" href="<?= base_url('quienes_somos') ?>">Quienes somos</a>
                       </li>
                   </ul>
                   <div class="nav-busqueda d-flex gap-1 m-2 justify-content-end align-items-center">
                       <a class="btn" data-bs-toggle="offcanvas" href="#carritoOffcanvas" role="button" aria-controls="carritoOffcanvas">
                           <img src="<?= base_url('public/assets/img/carrito-nav.png') ?>" alt="">
                       </a>
                       <form action="<?= base_url('busqueda/resultados') ?>" class="d-flex" role="search">
                           <input class="bg-white form-control me-2" name="q" type="search" aria-label="Search">
                           <button class="btn btn-outline-light" type="submit">Buscar</button>
                       </form>
                   </div>
               </div>
           </div>
       </nav>
   </section>

   </html>