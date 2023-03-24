//Funcion jquery para enviar los datos del form registrar sin actualizar la ventana
$(document).ready(function () {
  $("#form_register").submit(function (event) {
    // Evitar que se envíe el formulario de forma normal
    event.preventDefault();
    // Obtener los datos del formulario
    var Datos = $("#form_register").serialize();
    // Itera sobre los datos del formulario y obtiene los valores de cada campo
    var datos_test = $("#form_register").serializeArray();
    var datos = {};
    $.each(datos_test, function (index, field) {
      datos[field.name] = field.value;
    });
    //Primero validamos las contraseñas iguales
    if (datos.txt_repetir_pass == datos.txt_pass) {
      // Enviar los datos por AJAX
      $.ajax({
        type: "POST",
        url: "./back_end/controladores/p_register.php",
        data: Datos,
        success: function (response) {
          const usuario = datos.txt_nombres.split(" ").join("");
          const pass = datos.txt_pass;
          cargarinterfaz("./components/modal_registro.php?usuario="+usuario+"&pass="+pass,"modal");
        },
        error: function () {
          alert("No se pudo registrar. intentelo mas tarde");
        },
      });
    } else {
      alert("Las contraseñas no son iguales");
    }
  });
});
function cargarinterfaz(url, contenedor) {
    $.get(url, {}, function (data) {
      $("#" + contenedor).html(data);
    });
}
  