<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Contacto</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>

<body class="bg-black text-white">
    
    <hr class="border-white my-2" style="border-width: 3px;">

    <section class="container py-5">
        <h1 class="text-center fw-light mb-4">Contacto</h1>
        <hr class="border-light">

        <div class="row">
            <!-- Información de la empresa -->
            <div style="text-align: justify;" class="col-md-6 mb-4">
                <h4 class="fw-semibold">Información de la Empresa</h4>
                <p><strong>Titular:</strong> Nicolás Torres</p>
                <p><strong>Razón Social:</strong> Indumentaria G&G S.R.L.</p>
                <p><strong>Domicilio Legal:</strong> Mariano Moreno 500, Corrientes, Argentina</p>
                <p><strong>Teléfono:</strong> +54 379 400-0000</p>
                <p><strong>Email:</strong> contacto@indumentariaG&G.com</p>
                <p><strong>Instagram:</strong> <a href="https://www.instagram.com/G&G" class="text-info">@G&G Indumentaria</a></p>
            </div>

            <!-- Formulario de contacto -->
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


</body>
</html>
