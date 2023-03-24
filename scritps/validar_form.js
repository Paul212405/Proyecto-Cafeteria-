//Funcion que validara el formukario de actualizacion de usuario
function validar_contras(contra_real) {
  const contra_actual = document.getElementById("contra_actual");
  const contra_nueva = document.getElementById("contra_nueva");
  const contra_nueva_conf = document.getElementById("contra_nueva_conf");

  onsubmit = (evento) => {
    //validar
    if (
      contra_actual.value != "" &&
      contra_nueva.value != "" &&
      contra_nueva_conf.value != ""
    ) {
      if (contra_actual.value != contra_real) {
        evento.preventDefault();
        contra_actual.value = "";
        alert("Las contraseña actual no es la correcta");
      } else if (contra_nueva.value != contra_nueva_conf.value) {
        evento.preventDefault();
        contra_nueva_conf.value = "";
        alert("Confirme correctamente la nueva contraseña");
      }
    }
  };
}
