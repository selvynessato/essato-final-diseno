$(document).ready(function() {
    $('#pais').on('change', function() {
        var paisId = $(this).val();

        $.ajax({
            url: '/departamentos/' + paisId, // Ruta corregida para que coincida con la definida en las rutas de Laravel
            type: 'GET',
            success: function(data) {
                // Limpiar opciones actuales
                $('#departamento').empty();
                
                // Agregar nuevas opciones
                $.each(data, function(key, value) {
                    $('#departamento').append('<option value="' + value.id_departamento + '">' + value.nombre_departamento + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error(error);
            }
        });
    });
});
