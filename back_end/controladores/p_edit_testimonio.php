<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_testimonio = $_POST["txt_codigo"];
$testimonio = $_POST["txt_testimonio"];
$valoracion = $_POST["txt_valoracion"];
//Tratando datos
$testimonio = trim($testimonio);
$valoracion = trim($valoracion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_testimonio SET testimonio = ?, valoracion = ?");
$sql->bind_param(
    "ssi",
    $testimonio,
    $valoracion,
    $id_testimonio
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
