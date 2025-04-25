<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-black text-white">
<hr class="border-white my-4">
<section class="container-fluid py-5 bg-black text-white">
    <div class="container">
        <h1 class="text-center fw-light mb-4">Contacto</h1>
        <hr class="border-light">

        <div class="row">
            <!-- Columna 1: Información de la empresa + Mapa -->
            <div class="col-md-6 mb-4">
                <div style="text-align: justify;">
                    <h4 class="fw-semibold">Información de la Empresa</h4>
                    <p><strong>Titular:</strong> Nicolás Torres</p>
                    <p><strong>Razón Social:</strong> Indumentaria G&G S.R.L.</p>
                    <p><strong>Domicilio Legal:</strong> Mariano Moreno 500, Corrientes, Argentina</p>
                    <p><strong>Teléfono:</strong> +54 379 400-0000</p>
                    <p><strong>Email:</strong> contacto@indumentariaG&G.com</p>
                    <p><strong>Instagram:</strong> <a href="https://www.instagram.com/G&G" class="text-info">@G&G Indumentaria</a></p>
                </div>

                <!-- Mapa -->
                <div class="mt-4">
                    <h4 class="fw-semibold">Ubicación</h4>
                    <div class="ratio ratio-16x9 rounded overflow-hidden border border-light">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3558.130933708219!2d-58.83657282446989!3d-27.46987271544564!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94456c1c3b1a73b5%3A0x95d70a618fe5b345!2sMariano%20Moreno%20500%2C%20W3400%20Corrientes!5e0!3m2!1ses!2sar!4v1714083012345"
                            style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>

            <!-- Columna 2: Formulario -->
            <div class="col-md-6">
                <h4 class="fw-semibold">Envianos tu consulta</h4>
                <form>
                    <div class="mb-3">
                        <label for="nombre" class="form-label">Nombre y Apellido</label>
                        <input type="text" class="form-control" id="nombre" required>
                    </div>
                    <div class="mb-3">
                        <label for="correo" class="form-label">Correo electrónico</label>
                        <input type="email" class="form-control" id="correo" required>
                    </div>
                    <div class="mb-3">
                        <label for="telefono" class="form-label">Teléfono</label>
                        <input type="tel" class="form-control" id="telefono">
                    </div>
                    <div class="mb-3">
                        <label for="mensaje" class="form-label">Mensaje</label>
                        <textarea class="form-control" id="mensaje" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-success">Enviar mensaje</button>
                </form>
            </div>
        </div>
    </section>

    <hr class="border-white my-2" style="border-width: 3px;">
    <div class="text-center my-4">
        <a href="<?= base_url('/') ?>" class="boton-blanco btn">Volver al Inicio</a>
    </div>

</body>

</html>