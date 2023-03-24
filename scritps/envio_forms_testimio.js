//Funcion jquery para enviar los datos del form testimonio sin actualizar la ventana
$(document).ready(function () {
  $("#formulario_testimonio").submit(function (event) {
    // Evitar que se envíe el formulario de forma normal
    event.preventDefault();
    // Obtener los datos del formulario
    var Datos = $("#formulario_testimonio").serialize();
    // Itera sobre los datos del formulario y obtiene los valores de cada campo
    var datos_test = $("#formulario_testimonio").serializeArray();
    var datos = {};
    $.each(datos_test, function(index, field) {
      datos[field.name] = field.value;
    });
    // Enviar los datos por AJAX
    $.ajax({
      type: "POST",
      url: "./back_end/controladores/p_testimonio.php",
      data: Datos,
      success: function (response) {
        alert("Testimonio registrado correctamente");
        setTimeout(function () {
          // código que se ejecutará después de 1 segundos 
          cargarinterfaz(
            "components/modal_producto.php?p=" + datos.id_producto+"&c="+datos.c+"&o="+datos.o,
            "contenedor_producto"
          );}, 1000);
      },
      error: function () {
        alert("No se pudo enviar su testimonio");
      },
    });
  });
});
