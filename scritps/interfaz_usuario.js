function cargarinterfaz(url, contenedor) {
  $.get(url, {}, function (data) {
    $("#" + contenedor).html(data);
  });
}
//Funcion para cargar el modal de un producto
function quitar_scroll_y(id_producto,c,o) {
  cargarinterfaz(
    "components/modal_producto.php?p=" + id_producto+"&c="+c+"&o="+o,
    "contenedor_producto"
  );
  $(".overflow-y-auto")
    .removeClass("overflow-y-auto")
    .addClass("overflow-y-hidden");
}
//Para desaparecer el modal de un producto
function desactivar_producto(c,o) {
  document.querySelector("#producto-in").classList.toggle("hidden");
  document.querySelector("#producto-des").classList.toggle("hidden");
  $(".overflow-y-hidden")
    .removeClass("overflow-y-hidden")
    .addClass("overflow-y-auto");
    cargarinterfaz("components/lista_2x2.php?c="+c+"&o="+o,"contenedor_productos");
}

//Para controlar las estrellas del un formulario opinion
function setRating(rating) {
  // Obtiene todas las etiquetas de estrellas
  const stars = document.querySelectorAll(".rating label");
  // Quita la clase "active" de todas las estrellas
  stars.forEach(function (star) {
    star.classList.remove("activado");
  });
  // Agrega la clase "active" a las estrellas seleccionadas
  for (let i = 0; i < rating; i++) {
    stars[i].classList.add("activado");
  }
  // Establece la calificación seleccionada en el campo de entrada oculto
  const ratingInput = document.querySelector('input[name="rating"]');
  ratingInput.value = rating;
}




