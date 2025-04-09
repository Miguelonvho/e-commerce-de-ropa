<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/miestilo.css">
    <title>Titulo</title>
</head>

<body>
    <!-- Navbar -->
    <section class="container-fluid p-0">
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
            <div class="container-fluid">
                <img style="width: 50px" src="assets/img/logo.png" alt="responsive">
                <a class="text-white navbar-brand" href="#">Navbar</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
                    aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarScroll">
                    <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                        <li class="nav-item">
                            <a class="text-white nav-link active" aria-current="page" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link" href="#">Link</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="text-white nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Link
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="text-white dropdown-item" href="#">Action</a></li>
                                <li><a class="text-white dropdown-item" href="#">Another action</a></li>
                                <li>
                                    <hr class="dropdown-divider">
                                </li>
                                <li><a class="text-white dropdown-item" href="#">Something else here</a></li>
                            </ul>
                        </li>
                        <li class="nav-item">
                            <a class="text-white nav-link disabled" aria-disabled="true">Link</a>
                        </li>
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-dark" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </section>
    <section class="container m-0 p-0">
        <div id="carouselExampleCaptions" class="carousel slide">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active"> 
                    <img src="assets/img/color.png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/color (1).png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="assets/img/color (2).png" class="d-block w-100" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <section class="container text-white text-center">
        <p class="m-5 fs-1 fw-bold fst-italic">
            Titulo de ejemplo
        </p>
        <p class="m-5">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Error eveniet, dicta quos doloremque, consequuntur repellendus, 
            vel minus pariatur facilis accusantium deserunt ea molestias aliquam. 
            Eligendi quisquam ullam assumenda ea nobis?
        </p>
        <p class="m-5">            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Error eveniet, dicta quos doloremque, consequuntur repellendus, 
            vel minus pariatur facilis accusantium deserunt ea molestias aliquam. 
            Eligendi quisquam ullam assumenda ea nobis?
        </p>
        <p class="m-5">            
            Lorem ipsum dolor sit amet consectetur adipisicing elit. 
            Error eveniet, dicta quos doloremque, consequuntur repellendus, 
            vel minus pariatur facilis accusantium deserunt ea molestias aliquam. 
            Eligendi quisquam ullam assumenda ea nobis?
        </p>
    </section>
    <footer class="bg-dark" data-bs-theme="dark">
        <h1 class="text-white">Footer de la pagina</h1>
    </footer>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
</body>

</html>