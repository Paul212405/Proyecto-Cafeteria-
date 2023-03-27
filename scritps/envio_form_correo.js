$(document).ready(function () {
    $("#form_correo").submit(function (e) {
      e.preventDefault();
      $.ajax({
        type: "POST",
        url: "./back_end/controladores/p_correo.php",
        data: $(this).serialize(),
        success: function (data) {
          // Manejar la respuesta del servidor
          $("#form_correo")[0].reset(); // Restablece el formulario después del éxito de envío
          alert("Correo enviado correctamente");
        },
        error: function (xhr, status, error) {
          alert("No se ha podido enviar su correo");
          console.log(error);
        },
      });
    });
  });