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
//Funcion para enviar la peticion sin un formulario y que me actualice el carrito
function eliminar_detalle_pedido(datos, metodo, url, error) {
  $.ajax({
    url: url,
    type: metodo,
    data: datos,
    success: actualizar_carrito(),
    error: actualizar_carrito(),
  });
}
//Funcion para enviar la peticion sin un formulario y que me actualice las tablas pedido
function eliminar_item_pedido(datos, metodo, url, error) {
  $.ajax({
    url: url,
    type: metodo,
    data: datos,
    success: actualizar_tabla_pedido(),
    error: actualizar_tabla_pedido(),
  });
}
function actualizar_carrito() {
  setTimeout(function () {
    // código que se ejecutará después de 1 segundos
    cargarinterfaz("./components/item_carrito.php", "contenedor_item_carrito");
    cargarinterfaz("./components/carrito.php", "contenedor_carrito");
  }, 1000);
}
function actualizar_tabla_pedido() {
  setTimeout(function () {
    // código que se ejecutará después de 1 segundos
    cargarinterfaz("./components/item_carrito.php", "contenedor_item_carrito");
    cargarinterfaz('./components/tabla_pedido.php', 'contenedor_tabla_pedido');
  }, 1000);
}
