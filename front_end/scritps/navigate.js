function activar_menu() {
  document.querySelector("#menu").classList.toggle("hidden");
  document.querySelector("#menu").classList.toggle("top-16");
  document.querySelector("#cuenta").classList.toggle("hidden");
}

function activar_login() {
  document.querySelector("#m-login").classList.toggle("hidden");
  document.querySelector("#b-login").classList.toggle("hidden");
}
function activar_carrito() {
  document.querySelector("#m-carrito").classList.toggle("hidden");
  document.querySelector("#b-carrito").classList.toggle("hidden");
}
function cargarinterfaz(url, contenedor) {
  $.get(url, {}, function (data) {
    $("#" + contenedor).html(data);
  });
}
//Funcion para enviar la peticion sin un formulario
function eliminar_detalle_pedido(datos, metodo, url, error) {
  $.ajax({
    url: url,
    type: metodo,
    data: datos,
    success: actualizar_carrito(),
    error: actualizar_carrito(),
  });
}
function actualizar_carrito() {
  setTimeout(function () {
    // código que se ejecutará después de 1 segundos
    cargarinterfaz("./components/item_carrito.php", "contenedor_item_carrito");
    cargarinterfaz("./components/carrito.php", "contenedor_carrito");
  }, 1000);
}
