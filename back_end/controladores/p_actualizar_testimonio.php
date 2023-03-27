<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idtestimonio = $_SESSION["testimonio"];
$testimonio = $_POST["txt_testimonio"];
$valoracion = $_POST["txt_valoracion"];
//Tratando datos
$testimonio = trim($testimonio);
$valoracion = trim($valoracion);
$direccion = trim($direccion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_testimonio SET testimonio = ?, 
   valoracion = ?  
   WHERE id_testimonio = ?");
$sql->bind_param(
    "ss",
    $testimonio,
    $valoracion,
    $idtestimonio
);
$sql->execute();
//Para actualizar usuario
$idtestimonio = $_SESSION["testimonio"];
$testimonio = $_POST["txt_testimonio"];
$valoracion = $_POST["txt_valoracion"];
if ($testimonio != "" && $valoracion != "" ) {
    $sql = $con->prepare("UPDATE tb_testimonio SET testimonio = ?, 
   valoracion = ? 
   WHERE id_testimonio = ?");
    $sql->bind_param(
        "sss",
        $idtestimonio,
        $testimonio,
        $valoracion
    );
    $sql->execute();
}
$con->close();
//header("location: ../../cuenta.php");
echo "<script>window.location='../../cuenta.php'</script>";
