$(document).ready(function() {
    $('#selectPais').on('change', function() {
        var paisId = $(this).val();

        console.log('ID del país seleccionado:', paisId);

        $.ajax({
            url: '/listar-departamentos', // Ruta corregida para que coincida con la definida en las rutas de Laravel
            type: 'GET',
            data: {id_pais: paisId}, // Envía el ID del país como parámetro en la solicitud AJAX
            success: function(data) {
                console.log('Datos recibidos del servidor:', data);

                // Limpiar opciones actuales del selector de departamentos
                $('#selectDepartamento').empty();
                
                // Agregar nuevas opciones al selector de departamentos
                $.each(data, function(key, value) {
                    console.log('ID del departamento:', key);
                    console.log('Nombre del departamento:', value);
                    $('#selectDepartamento').append('<option value="' + key + '">' + value + '</option>');
                });
            },
            error: function(xhr, status, error) {
                console.error('Error en la solicitud AJAX:', error);
            }
        });
    });
});