   <!DOCTYPE html>
   <html lang="en">

   <body>
       <section class="container-fluid p-0">
           <nav class="navbar bg-black navbar-expand-lg border-body" data-bs-theme="dark">
               <div class="container-fluid">
                   <a href=""><img style="width: 100px" src="<?= base_url('public/assets/img/logo.png') ?>" alt="responsive"></a>
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
                                   <li><a class="text-white dropdown-item" href="#">Masculino</a></li>
                                   <li><a class="text-white dropdown-item" href="#">Femenino</a></li>
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
                                   <a class="btn" href=""><img src="<?= base_url('public/assets/img/carrito-nav.png') ?>" alt=""></a>
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
   </body>

   </html>