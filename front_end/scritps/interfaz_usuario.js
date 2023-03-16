function cargarinterfaz(url,contenedor) {
    $.get(url,{},function(data){
        $("#" + contenedor).html(data);
    });
}
function quitar_scroll_y() {
    cargarinterfaz('./components/modal_producto.php?p=hola','contenedor_producto');
    $('.overflow-y-auto').removeClass("overflow-y-auto").addClass("overflow-y-hidden");
}
//Para desaparecer el menu
function desactivar_producto() {
    document.querySelector("#producto-in").classList.toggle("hidden");
    document.querySelector("#producto-des").classList.toggle("hidden");
    $('.overflow-y-hidden').removeClass("overflow-y-hidden").addClass("overflow-y-auto");
  }