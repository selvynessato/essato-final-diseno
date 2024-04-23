function cargarDepartamentos() {
    var idPais = document.getElementById('pais').value;
    
    axios.post('/obtener-departamentos', { idPais: idPais })
        .then(function (response) {
            var departamentos = response.data;
            var departamentoSelect = document.getElementById('departamento');
            departamentoSelect.innerHTML = ''; // Limpiar opciones anteriores

            departamentos.forEach(function (departamento) {
                var option = document.createElement('option');
                option.value = departamento.id_departamento;
                option.textContent = departamento.nombre_departamento;
                departamentoSelect.appendChild(option);
            });
            console.log(departamentos)
        })
        .catch(function (error) {
            console.error('Error al obtener los departamentos:', error);
        });
}