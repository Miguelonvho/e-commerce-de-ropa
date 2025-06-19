<!-- Vista: catalogo_productos_view.php -->
<section class="container-fluid bg-white text-dark py-4">
    <h1 class="text-center mb-4">Catálogo de Productos</h1>
    <div class="row">
        <!-- Filtros -->
        <aside class="col-md-3 mb-4">
            <form method="get" action="<?= site_url('catalogo_productos_view') ?>">

                <div class="accordion" id="filtrosAccordion">
                    <!-- Filtro por Edad -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingEdad">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseEdad">
                                Filtrar por Edad
                            </button>
                        </h2>
                        <div id="collapseEdad" class="accordion-collapse collapse" data-bs-parent="#filtrosAccordion">
                            <div class="accordion-body">
                                <?php foreach ($edades as $edad): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="edad[]"
                                            value="<?= $edad['id_edad'] ?>" <?= in_array($edad['id_edad'], $edadSeleccionada ?? []) ? 'checked' : '' ?>>
                                        <label class="form-check-label"><?= esc($edad['nombre']) ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Categoría -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingCategoria">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseCategoria">
                                Filtrar por Categoría
                            </button>
                        </h2>
                        <div id="collapseCategoria" class="accordion-collapse collapse"
                            data-bs-parent="#filtrosAccordion">
                            <div class="accordion-body">
                                <?php foreach ($categorias as $categoria): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="categoria[]"
                                            value="<?= $categoria['id_categoria'] ?>"
                                            <?= in_array($categoria['id_categoria'], $categoriaSeleccionada ?? []) ? 'checked' : '' ?>>
                                        <label class="form-check-label"><?= esc($categoria['nombre']) ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Marca -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingMarca">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseMarca">
                                Filtrar por Marca
                            </button>
                        </h2>
                        <div id="collapseMarca" class="accordion-collapse collapse" data-bs-parent="#filtrosAccordion">
                            <div class="accordion-body">
                                <?php foreach ($marcas as $marca): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="marca[]"
                                            value="<?= $marca['id_marca'] ?>" <?= in_array($marca['id_marca'], $marcaSeleccionada ?? []) ? 'checked' : '' ?>>
                                        <label class="form-check-label"><?= esc($marca['nombre']) ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>

                    <!-- Filtro por Género -->
                    <div class="accordion-item">
                        <h2 class="accordion-header" id="headingGenero">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                data-bs-target="#collapseGenero">
                                Filtrar por Género
                            </button>
                        </h2>
                        <div id="collapseGenero" class="accordion-collapse collapse" data-bs-parent="#filtrosAccordion">
                            <div class="accordion-body">
                                <?php foreach ($generos as $genero): ?>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="genero[]"
                                            value="<?= $genero['id_genero'] ?>" <?= in_array($genero['id_genero'], $generoSeleccionado ?? []) ? 'checked' : '' ?>>
                                        <label class="form-check-label"><?= esc($genero['nombre']) ?></label>
                                    </div>
                                <?php endforeach; ?>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="submit" class="btn btn-primary w-100 mt-3">Aplicar Filtros</button>
            </form>
        </aside>


        <!-- Productos -->
        <div class="col-md-9">
            <div class="row g-4">
                <?php if (empty($productos)): ?>
                    <div class="col-12">
                        <p class="text-center">No se encontraron productos con los filtros seleccionados.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($productos as $producto): ?>
                        <div class="col-md-4">
                            <div class="card  bg-black text-white h-100 shadow">
                                <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>" class="card-img-top"
                                    alt="<?= esc($producto['nombre_prod']) ?>" style="height: 250px; object-fit: cover;">

                                <div class="card-body d-flex flex-column">
                                    <h5 class="card-title"><?= esc($producto['nombre_prod']) ?></h5>
                                    <p class="card-text mb-1 fw-bold">
                                        $<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>

                                    <!-- Stock y estado -->
                                    <p class="card-text mb-2">
                                        <small class="">
                                            <?= $producto['stock'] ?> unidades disponibles
                                        </small><br>
                                        <?php if ($producto['stock'] > 0): ?>
                                            <span class="badge bg-success">Hay stock</span>
                                        <?php else: ?>
                                            <span class="badge bg-danger">Sin stock</span>
                                        <?php endif; ?>
                                    </p>

                                    <form action="<?= site_url('carrito_view/agregar') ?>" method="post" class="mt-auto">
                                        <input type="hidden" name="id" value="<?= $producto['id_producto'] ?>">
                                        <input type="hidden" name="nombre_prod" value="<?= $producto['nombre_prod'] ?>">
                                        <input type="hidden" name="precio_venta" value="<?= $producto['precio_venta'] ?>">
                                        <input type="hidden" name="imagen" value="<?= $producto['imagen'] ?>">

                                        <div class="input-group mb-2">
                                            <span class="input-group-text">Cantidad</span>
                                            <input type="number" name="cantidad" min="1" max="<?= $producto['stock'] ?>"
                                                value="1" class="form-control" style="max-width: 100px;">
                                        </div>

                                        <button type="submit" class="btn btn-outline-light w-100" <?= $producto['stock'] <= 0 ? 'disabled' : '' ?>>
                                            Agregar al carrito
                                        </button>
                                    </form>
                                </div>


                            </div>
                        </div>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>