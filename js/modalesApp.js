//funcion del modal de validacion de datos
document.getElementById('loginForm').addEventListener('submit', function(e) {
  e.preventDefault();
  
  const usuario = document.getElementById('nombre').value.trim();
  const ciudad = document.getElementById('ciudad').value.trim();
  
  if (usuario && ciudad) {
      // Alerta de éxito
      Swal.fire({
          title: '¡Éxito!',
          text: 'Datos insertados correctamente',
          icon: 'success',
          confirmButtonText: 'OK',
          confirmButtonColor: '#0d6efd'
      }).then((result) => {
          if (result.isConfirmed) {
              // Aquí puedes agregar lo que quieres que suceda después de dar click en OK
              // Por ejemplo, redireccionar o limpiar el formulario
              document.getElementById('loginForm').reset();
              header('Location: ../index.php');
          }
      });
  } else {
      // Alerta de error
      Swal.fire({
          title: 'Error',
          text: 'Por favor, complete todos los campos',
          icon: 'error',
          confirmButtonText: 'Entendido',
          confirmButtonColor: '#dc3545'
      });
  }
});
