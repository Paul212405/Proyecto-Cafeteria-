//Funcion para enviar la peticion final de enviar pedido
function finalizar_compra(datos, metodo, url) {
  //Destructuro los datos para preguntar si existe una direccion
  const { direccion: direc } = datos;
  if (direc != "") {
    $.ajax({
      url: url,
      type: metodo,
      data: datos,
      success: alert("Compra Finalizada"),
      error: alert("No se pudo finalizar la compra"),
    });
  }else{
    alert('Por favor actualize su direccion de facturacion')
  }
}
