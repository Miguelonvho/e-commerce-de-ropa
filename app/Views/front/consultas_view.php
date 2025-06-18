<hr class="m-0">
<div class="crud-container bg-black text-white d-flex flex-column" style="height: 550px">

    <!-- Encabezado -->
    <div class="d-flex justify-content-between align-items-center mt-3 mx-4">
        <h3 class="fw-light m-0">Consultas Recibidas</h3>
    </div>

    <!-- Vista escritorio: Tabla scrollable -->
    <div class="d-none d-md-block mx-4 mt-3 rounded bg-white shadow-sm border overflow-auto" style="max-height: 460px;">
        <table class="table table-bordered table-hover mb-0 text-center align-middle" style="min-width: 900px;">
            <thead class="bg-light sticky-top" style="top: 0; z-index: 1;">
                <tr>
                    <th style="width: 15%;">Nombre</th>
                    <th style="width: 20%;">Correo</th>
                    <th style="width: 15%;">Teléfono</th>
                    <th style="width: 30%;">Mensaje</th>
                    <th style="width: 20%;">Fecha</th>
                </tr>
            </thead>
            <tbody>
                <?php if (empty($consultas)): ?>
                    <tr>
                        <td colspan="5" class="text-center">No hay consultas registradas.</td>
                    </tr>
                <?php else: ?>
                    <?php foreach ($consultas as $consulta): ?>
                        <tr>
                            <td><?= esc($consulta['nombre']) ?></td>
                            <td><?= esc($consulta['correo']) ?></td>
                            <td><?= esc($consulta['telefono']) ?></td>
                            <td class="text-start"><?= esc($consulta['mensaje']) ?></td>
                            <td><?= date('d/m/Y H:i', strtotime($consulta['fecha'])) ?></td>
                        </tr>
                    <?php endforeach; ?>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <!-- Vista móvil: Tarjetas -->
    <div class="d-md-none d-flex justify-content-center overflow-auto gap-4 flex-wrap mx-3 mt-3">
        <?php if (empty($consultas)): ?>
            <div class="text-center text-white p-5">No hay consultas registradas.</div>
        <?php else: ?>
            <?php foreach ($consultas as $consulta): ?>
                <div class="card bg-white text-dark shadow-sm" style="min-width: 280px; max-width: 100%;">
                    <div class="card-body">
                        <p class="mb-1"><strong>Nombre:</strong> <?= esc($consulta['nombre']) ?></p>
                        <p class="mb-1"><strong>Correo:</strong> <?= esc($consulta['correo']) ?></p>
                        <p class="mb-1"><strong>Teléfono:</strong> <?= esc($consulta['telefono']) ?></p>
                        <p class="mb-1"><strong>Mensaje:</strong><br><?= esc($consulta['mensaje']) ?></p>
                        <p class="mb-0"><strong>Fecha:</strong> <?= date('d/m/Y H:i', strtotime($consulta['fecha'])) ?></p>
                    </div>
                </div>
            <?php endforeach; ?>
        <?php endif; ?>
    </div>
</div>