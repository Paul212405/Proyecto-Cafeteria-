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