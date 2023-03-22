//Funcion jquery para enviar los datos del form registrar sin actualizar la ventana
//Para enviar un producto al carrito generado inicalmente x el cliente
$(document).ready(function () {
  $('form').submit(function (event) {
    event.preventDefault(); // evita el comportamiento predeterminado del formulario
    var Data =  new FormData(this); // obtiene los datos del formulario
    var form = $(this) //Guardamos una referencia del formulario
    $.ajax({
      type: "POST",
      url: "./../back_end/controladores/p_detalle_pedido.php",
      data: Data,
      processData: false,
      contentType: false,//Para el caso de FormData se requiere colocar estos valores a false
      success: function (response) {
        //Pedido registrado 
        form.get(0).reset(); // reseteamos el formulario actual
        cargarinterfaz('./components/item_carrito.php', 'contenedor_item_carrito');
      },
      error: function (xhr, status, error) {
        alert("No se ha podido procesar su pedido");
        console.log(error);
      },
    });
  });
});
