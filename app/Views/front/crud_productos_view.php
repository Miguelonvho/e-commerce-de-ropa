<div class="crud-container bg-black text-white">
  <hr class="border-white my-2">

  <!-- Botones -->
  <div class="d-flex justify-content-end mt-4 mx-5">
    <div class="d-flex align-items-end">
        <a href="<?= base_url('agregar_producto_view') ?>" class="btn btn-success me-2">Agregar</a>
        <a href="<?= base_url('productos_eliminados') ?>" class="btn btn-secondary">Eliminados</a>
    </div>
  </div>

  <!-- Barra de búsqueda -->
  <form method="get" class="d-flex justify-content-end mt-2 mx-5 mb-3">
      <div class="input-group" style="max-width: 250px;">
          <input type="text" name="buscar" class="form-control" placeholder="Buscar producto..." value="<?= esc($buscar ?? '') ?>">
          <button type="submit" class="btn btn-primary">Buscar</button>
      </div>
  </form>

  <!-- Cabecera de columnas (solo escritorio) -->
  <div class="cabecera-crud-prod d-none d-md-flex text-center">
      <div class="col-1">Imagen</div>
      <div class="col-1">ID</div>
      <div class="col-3">Producto</div>
      <div class="col-2">Costo</div>
      <div class="col-1">Precio Venta</div>
      <div class="col-2">Stock</div>
      <div class="col-1">Acciones</div>
  </div>

  <!-- Contenedor de scroll -->
  <div class="scroll-container-crud">

    <?php if (empty($productos)): ?>
        <div class="text-center mt-4">No se encontraron productos.</div>
    <?php else: ?>

    <?php foreach ($productos as $producto): ?>

      <!-- Vista escritorio -->
      <div class="producto-card d-none d-md-flex align-items-center text-center m-2 p-2 border border-secondary rounded">
          <div class="col-1">
              <?php if (empty($producto['imagen'])): ?>
                  <img src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>" alt="Sin imagen" style="width: 100px; height: 90px; object-fit: cover;">
              <?php else: ?>
                  <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>" alt="Producto" style="width: 100px; height: 90px; object-fit: cover;">
              <?php endif; ?>
          </div>
          <div class="col-1"><?= $producto['id_producto'] ?></div>
          <div class="col-3"><?= esc($producto['nombre_prod']) ?></div>
          <div class="col-2">$<?= number_format($producto['precio_costo'], 2, ',', '.') ?></div>
          <div class="col-2">$<?= number_format($producto['precio_venta'], 2, ',', '.') ?></div>
          <div class="col-1"><?= $producto['stock'] ?></div>
          <div class="col-2">
              <a href="<?= base_url('editar_productos_view/' . $producto['id_producto']) ?>" class="btn btn-primary mb-2">Editar</a><br>
              <a href="<?= base_url('borrar_producto/' . $producto['id_producto']) ?>" class="btn btn-danger">Borrar</a>
          </div>
      </div>

      <!-- Vista celular -->
      <div class="card d-md-none mb-3 w-100 px-2">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <?php if (empty($producto['imagen'])): ?>
                      <img src="<?= base_url('assets/img/Iconos/sin-imagen.png') ?>" class="me-3" style="width: 80px;">
                  <?php else: ?>
                      <img src="<?= base_url('public/assets/uploads/' . $producto['imagen']) ?>" class="me-3" style="width: 80px;">
                  <?php endif; ?>
                  <div>
                      <p><strong>ID:</strong> <?= $producto['id_producto'] ?></p>
                      <p><strong>Producto:</strong> <?= esc($producto['nombre_prod']) ?></p>
                      <p><strong>Costo:</strong> $<?= number_format($producto['precio_costo'], 2, ',', '.') ?></p>
                      <p><strong>Precio Venta:</strong> $<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>
                      <p><strong>Stock:</strong> <?= $producto['stock'] ?></p>
                      <div>
                          <a href="<?= base_url('editar_productos_view/' . $producto['id_producto']) ?>" class="btn btn-sm btn-primary">Editar</a>
                          <a href="<?= base_url('borrar_producto/' . $producto['id_producto']) ?>" class="btn btn-sm btn-danger">Borrar</a>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <?php endforeach; ?>
    <?php endif; ?>

  </div>
</div>
