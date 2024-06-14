function confirmDelete(id) {
  Swal.fire({
      title: "¿Desea eliminar archivo?",
      text: "No podrá revertir los cambios",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar"
  }).then((result) => {
      if (result.isConfirmed) {
          document.getElementById('delete-form-' + id).submit();
      }
  });
}

function confirmDeleteC(id) {
  Swal.fire({
      title: "¿Desea eliminar archivo?",
      text: "No podrá revertir los cambios",
      icon: "question",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      confirmButtonText: "Eliminar"
  }).then((result) => {
      if (result.isConfirmed) {
          // El usuario ha hecho clic en "Eliminar", proceder con la eliminación
          document.getElementById('delete-form-' + id).submit();
      } else {
          // El usuario ha cancelado, no hacer nada
          return false;
      }
  });
}



// Mostrar mensaje de éxito después de una acción
function showSuccessMessage(message) {
  Swal.fire({
      title: "¡Eliminado!",
      text: message,
      icon: "success",
      confirmButtonText: "OK"
  });
}