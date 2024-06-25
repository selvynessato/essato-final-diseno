document.addEventListener('DOMContentLoaded', function () {
    // Previsualizar imagen seleccionada en el modal de creación
    document.querySelector('#img_blog').addEventListener('change', function (e) {
        previewImage(e, '#img_preview');
    });

    // Previsualizar imagen seleccionada en los modales de edición
    document.querySelectorAll('input[id^="img_blog"]').forEach(function (input) {
        input.addEventListener('change', function (e) {
            const id_blog = this.id.split('_').pop();
            previewImage(e, `#img_preview_${id_blog}`);
        });
    });
});

function previewImage(event, selector) {
    const reader = new FileReader();
    reader.onload = function () {
        const output = document.querySelector(selector);
        output.src = reader.result;
        output.style.display = 'block';
    };
    reader.readAsDataURL(event.target.files[0]);
}