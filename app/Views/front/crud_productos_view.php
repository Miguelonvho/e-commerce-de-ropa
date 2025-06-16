<div class="crud-container bg-black text-white">
  <hr class="border-white my-2">

  <div class="d-flex justify-content-end m-2">
    <div class="d-flex align-items-end">
        <button class="btn btn-success me-2">Agregar</button>
        <button class="btn btn-secondary">Eliminados</button>
    </div>
  </div>

  <!-- Cabecera de columnas (solo en escritorio) -->
  <div class="cabecera-crud-prod d-none d-md-flex text-center">
      <div class="col-1">Imagen</div>
      <div class="col-1">ID</div>
      <div class="col-3">Producto</div>
      <div class="col-2">Costo</div>
      <div class="col-2">Precio Venta</div>
      <div class="col-1">Stock</div>
      <div class="col-2">Acciones</div>
  </div>

  <!-- Contenedor de scroll -->
  <div class="scroll-container-crud">

    <?php foreach ($productos as $producto): ?>

      <!-- Vista escritorio -->
      <div class="producto-card d-none d-md-flex align-items-center text-center m-2 p-2 border border-secondary rounded">
          <div class="col-1">
              <img src="<?= base_url($producto['imagen']) ?>" alt="Producto" class="producto-img">
          </div>
          <div class="col-1"><?= $producto['id_producto'] ?></div>
          <div class="col-3"><?= esc($producto['nombre_prod']) ?></div>
          <div class="col-2">$<?= number_format($producto['precio_costo'], 2, ',', '.') ?></div>
          <div class="col-2">$<?= number_format($producto['precio_venta'], 2, ',', '.') ?></div>
          <div class="col-1"><?= $producto['stock'] ?></div>
          <div class="col-2">
              <button class="btn btn-primary mb-2">Editar</button><br>
              <button class="btn btn-danger">Borrar</button>
          </div>
      </div>

      <!-- Vista celular -->
      <div class="card d-md-none mb-3 mx-2">
          <div class="card-body">
              <div class="d-flex align-items-center">
                  <img src="<?= base_url($producto['imagen']) ?>" class="me-3" style="width: 80px;">
                  <div>
                      <p><strong>ID:</strong> <?= $producto['id_producto'] ?></p>
                      <p><strong>Producto:</strong> <?= esc($producto['nombre_prod']) ?></p>
                      <p><strong>Costo:</strong> $<?= number_format($producto['precio_costo'], 2, ',', '.') ?></p>
                      <p><strong>Precio Venta:</strong> $<?= number_format($producto['precio_venta'], 2, ',', '.') ?></p>
                      <p><strong>Stock:</strong> <?= $producto['stock'] ?></p>
                      <div>
                          <button class="btn btn-sm btn-primary">Editar</button>
                          <button class="btn btn-sm btn-danger">Borrar</button>
                      </div>
                  </div>
              </div>
          </div>
      </div>

    <?php endforeach; ?>

  </div>
</div>
