
document.addEventListener('DOMContentLoaded', function () {
    const toastElList = [].slice.call(document.querySelectorAll('.toast'));
    toastElList.forEach(function (toastEl) {
        const toast = new bootstrap.Toast(toastEl);
        toast.show();
    });
});

document.addEventListener('DOMContentLoaded', function () {
    const inputImagen = document.getElementById('imagen');
    const preview = document.getElementById('preview-img');

    if (inputImagen && preview) {
        inputImagen.addEventListener('change', function (event) {
            const file = event.target.files[0];

            if (file) {
                const reader = new FileReader();

                reader.onload = function () {
                    preview.src = reader.result;
                    preview.style.display = 'block';
                };

                reader.readAsDataURL(file);
            }
        });
    }
});

document.addEventListener('DOMContentLoaded', () => {
    // Agrega el listener global una sola vez
    const campos = document.querySelectorAll('input[data-original]');
    campos.forEach(campo => {
        campo.addEventListener('input', verificarCambios);
    });
});

function habilitarCampo(id) {
    const input = document.getElementById(id);
    input.removeAttribute('readonly');
    input.focus();
}

function verificarCambios() {
    const campos = document.querySelectorAll('input[data-original]');
    let hayCambios = false;

    campos.forEach(campo => {
        if (!campo.hasAttribute('readonly') && campo.value !== campo.getAttribute('data-original')) {
            hayCambios = true;
        }
    });

    document.getElementById('guardarBtn').disabled = !hayCambios;
}