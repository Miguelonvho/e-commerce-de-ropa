
document.addEventListener('DOMContentLoaded', function () {
    var toastEl = document.getElementById('liveToast');
    var toast = new bootstrap.Toast(toastEl);
    toast.show();
});

function mostrarNombreArchivo(input) {
    const nombreArchivo = input.files.length > 0 ? input.files[0].name : 'No se seleccionó ningún archivo';
    document.getElementById('nombreArchivo').textContent = nombreArchivo;
}