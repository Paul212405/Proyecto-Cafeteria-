//Funcion jquery para enviar los datos del form registrar sin actualizar la ventana
$(document).ready(function() {
    $('form').submit(function(event) {
      event.preventDefault(); // evita el comportamiento predeterminado del formulario
  
      var Data = $(this).serialize(); // obtiene los datos del formulario
  
      $.ajax({
        type: 'POST',
        url: './../back_end/controladores/p_detalle_pedido.php',
        data: Data,
        success: function(response) {
          // se ejecuta cuando el servidor responde con éxito
          console.log(response);
        },
        error: function(xhr, status, error) {
          // se ejecuta cuando ocurre un error
          console.log(error);
        }
      });
    });
  });