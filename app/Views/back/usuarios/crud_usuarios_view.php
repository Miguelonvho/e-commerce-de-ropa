<hr class="m-0">
<div class="crud-container bg-black text-white d-flex flex-column" style="height: 550px">

    <!-- Botones -->
    <div class="d-flex justify-content-end mt-3 mx-4">
        <a href="<?= base_url('agregarusuario_view') ?>" class="btn btn-outline-success btn-sm me-2">Agregar</a>
        <a href="<?= base_url('usuarios_eliminados_view') ?>" class="btn btn-outline-secondary btn-sm">Eliminados</a>
    </div>

    <!-- Barra de búsqueda -->
    <form method="get" class="d-flex justify-content-end mt-2 mx-4 mb-2">
        <div class="input-group" style="max-width: 250px;">
            <input type="text" name="buscar" class="form-control" placeholder="Buscar..."
                value="<?= esc($buscar ?? '') ?>">
            <button type="submit" class="btn btn-primary btn-sm">Buscar</button>
        </div>
    </form>

    <!-- Vista escritorio: Tabla scrollable -->
    <div class="d-none d-md-block mx-4 rounded bg-white shadow-sm border overflow-auto" style="max-height: 500px;">
        <table class="table table-bordered table-hover mb-0 text-center align-middle" style="min-width: 900px;">
            <thead class="bg-light sticky-top" style="top: 0; z-index: 1;">
                <tr>
                    <th style="width: 10%;">ID</th>
                    <th style="width: 20%;">Nombre</th>
                    <th style="width: 20%;">Apellido</th>
                    <th style="width: 20%;">Usuario</th>
                    <th style="width: 20%;">Email</th>
                    <th style="width: 10%;">Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($usuarios)): ?>
                    <tr>
                        <td colspan="6" class="text-center">No se encontraron usuarios.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($usuarios as $usuario): ?>
                        <tr>
                            <td><?= esc($usuario['id']) ?></td>
                            <td><?= esc($usuario['nombre']) ?></td>
                            <td><?= esc($usuario['apellido']) ?></td>
                            <td><?= esc($usuario['usuario']) ?></td>
                            <td><?= esc($usuario['email']) ?></td>
                            <td class="d-flex justify-content-center gap-3">
                                <a href="<?= base_url('editar_usuario_admin/' . $usuario['id']) ?>"
                                    class="btn btn-sm btn-primary">Editar</a>
                                <a href="<?= base_url('eliminar_usuario/' . $usuario['id']) ?>"
                                    class="btn btn-sm btn-danger">Eliminar</a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Vista móvil: Tarjetas -->
    <div class="d-md-none d-flex justify-content-center overflow-auto gap-4 flex-wrap mx-3 mt-3">
        <?php if (empty($usuarios)): ?>
            <div class="text-center text-white p-5">No se encontraron usuarios.</div>
        <?php else: ?>
            <?php foreach ($usuarios as $usuario): ?>
                <div class="card mb-3">
                    <div class="card-body d-flex flex-column justify-content-between">
                        <p class="mb-1"><strong>ID:</strong> <?= esc($usuario['id']) ?></p>
                        <p class="mb-1"><strong>Nombre:</strong> <?= esc($usuario['nombre']) ?></p>
                        <p class="mb-1"><strong>Apellido:</strong> <?= esc($usuario['apellido']) ?></p>
                        <p class="mb-1"><strong>Usuario:</strong> <?= esc($usuario['usuario']) ?></p>
                        <p class="mb-2"><strong>Email:</strong> <?= esc($usuario['email']) ?></p>
                        <div class="d-flex justify-content-center">
                            <a href="<?= base_url('editar_usuario_admin/' . $usuario['id']) ?>"
                                class="btn btn-sm btn-primary me-2">Editar</a>
                            <a href="<?= base_url('eliminar_usuario/' . $usuario['id']) ?>"
                                class="btn btn-sm btn-danger">Eliminar</a>
                        </div>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>

</div>