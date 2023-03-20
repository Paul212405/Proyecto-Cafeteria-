//Funcion jquery para enviar los datos del form registrar sin actualizar la ventana
<<<<<<< HEAD
//Para enviar un producto al carrito generado inicalmente x el cliente
$(document).ready(function () {
  $("form").submit(function (event) {
    event.preventDefault(); // evita el comportamiento predeterminado del formulario
    var Data = $(this).serialize(); // obtiene los datos del formulario
    // Itera sobre los datos del formulario y obtiene los valores de cada campo
    var datos_test = $(this).serializeArray();
    var datos = {};
    $.each(datos_test, function (index, field) {
      datos[field.name] = field.value;
    });
    $.ajax({
      type: "POST",
      url: "./../back_end/controladores/p_detalle_pedido.php",
      data: Data,
      success: function (response) {
        //Pedido registrado 
        //Para reinicar el formulario los valores a 0
        cargarinterfaz('./components/item_carrito.php', 'contenedor_item_carrito');
        $("form")[0].reset();
      },
      error: function (xhr, status, error) {
        alert("No se ha podido procesar su pedido");
        console.log(error);
      },
    });
  });
});
=======
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
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
