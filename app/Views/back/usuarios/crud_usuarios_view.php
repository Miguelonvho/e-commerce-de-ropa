<div class="crud-container bg-black text-white">
    <hr class="border-white my-2">

    <!-- Botones -->
    <div class="d-flex justify-content-end mt-4 mx-5">
        <div class="d-flex align-items-end">
            <a href="<?= base_url('agregarusuario_view') ?>" class="btn btn-outline-success me-2">Agregar</a>
            <a href="<?= base_url('usuarios_eliminados_view') ?>" class="btn btn-outline-secondary">Eliminados</a>
        </div>
    </div>

    <!-- Barra de búsqueda -->
    <form method="get" class="d-flex justify-content-end mt-2 mx-5 mb-3">
        <div class="input-group" style="max-width: 250px;">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar usuario..."
                value="<?= esc($buscar ?? '') ?>">
            <button type="submit" class="btn btn-primary">Buscar</button>
        </div>
    </form>

    <!-- Cabecera de columnas (escritorio) -->
    <div class="cabecera-crud-prod d-none d-md-flex text-center">
        <div class="col-1">ID</div>
        <div class="col-2">Nombre</div>
        <div class="col-2">Apellido</div>
        <div class="col-2">Usuario</div>
        <div class="col-3">Email</div>
        <div class="col-2">Acciones</div>
    </div>

    <!-- Contenedor scroll -->
    <div class="scroll-container-crud">

        <?php if (empty($usuarios)): ?>
            <div class="text-center mt-4">No se encontraron usuarios.</div>
        <?php else: ?>
            <?php foreach ($usuarios as $usuario): ?>

                <!-- Vista escritorio -->
                <div
                    class="producto-card d-none d-md-flex align-items-center text-center m-2 py-4 border border-secondary rounded">
                    <div class="col-1"><?= esc($usuario['id_usuario']) ?></div>
                    <div class="col-2"><?= esc($usuario['nombre']) ?></div>
                    <div class="col-2"><?= esc($usuario['apellido']) ?></div>
                    <div class="col-2"><?= esc($usuario['usuario']) ?></div>
                    <div class="col-3"><?= esc($usuario['email']) ?></div>
                    <div class="col-2">
                        <a href="<?= base_url('editar_usuario_view/' . $usuario['id_usuario']) ?>"
                            class="btn btn-primary mb-2">Editar</a><br>
                        <a href="<?= base_url('eliminar_usuario/' . $usuario['id_usuario']) ?>"
                            class="btn px-1 btn-danger">Eliminar</a>
                    </div>
                </div>

                <!-- Vista móvil -->
                <div class="card d-md-none mb-3 w-100 px-2">
                    <div class="card-body">
                        <p><strong>ID:</strong> <?= esc($usuario['id_usuario']) ?></p>
                        <p><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?></p>
                        <p><strong>Apellido:</strong> <?= esc($usuario['apellido']) ?></p>
                        <p><strong>Usuario:</strong> <?= esc($usuario['usuario']) ?></p>
                        <p><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
                        <div>
                            <a href="<?= base_url('editar_usuario/' . $usuario['id_usuario']) ?>"
                                class="btn btn-sm btn-primary">Editar</a>
                            <a href="<?= base_url('eliminar_usuario/' . $usuario['id_usuario']) ?>"
                                class="btn btn-sm btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>

            <?php endforeach; ?>
        <?php endif; ?>

    </div>
</div>