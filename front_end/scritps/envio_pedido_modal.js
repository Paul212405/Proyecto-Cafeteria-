//Funcion jquery para enviar los datos del form registrar sin actualizar la ventana
$(document).ready(function () {
  $("#form_modal").submit(function (e) {
    e.preventDefault();
    $.ajax({
      url: "./../back_end/controladores/p_detalle_pedido.php",
      type: "POST",
      data: $(this).serialize(),
      success: function (data) {
        // Manejar la respuesta del servidor
        $("#form_modal")[0].reset(); // Restablece el formulario después del éxito de envío
        cargarinterfaz(
          "./components/item_carrito.php",
          "contenedor_item_carrito"
        );
      },
      error: function (xhr, status, error) {
        alert("No se ha podido procesar su pedido");
        console.log(error);
      },
    });
  });
});
