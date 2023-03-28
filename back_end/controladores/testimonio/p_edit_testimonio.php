<?php
include("../../conexion/conexion.php");
include("../../conexion/seguridad.php");
//recuperando datos
$id_testimonio = $_POST["txt_codigo"];
$testimonio = $_POST["txt_testimonio"];
$valoracion = $_POST["txt_valoracion"];
$producto = $_POST["producto"];
$fecha = date("Y-m-d H:i:s");
//Tratando datos
$testimonio = trim($testimonio);
$valoracion = trim($valoracion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_testimonio SET testimonio = ?, valoracion = ?, fecha_registro = ?, id_producto = ? WHERE id_testimonio = ?");
$sql->bind_param(
    "sssss",
    $testimonio,
    $valoracion,
    $fecha,
    $producto,
    $id_testimonio
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../../Admin/principal.php?t=3'</script>";
