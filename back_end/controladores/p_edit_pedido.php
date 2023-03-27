<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_pedido = $_POST["txt_codigo"];
$total = $_POST["txt_total"];
$estado = $_POST["txt_estado"];
//Tratando datos
$total = trim($total);
$estado = trim($estado);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_pedido SET total = ?, estado = ? WHERE id_pedido = ?");
$sql->bind_param(
    "sssssi",
    $total,
    $estado,
    $id_pedido
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
