<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$total = $_POST["txt_total"];
$estado = $_POST["txt_estado"];
//Tratando datos
$total = trim($total);
$estado = trim($estado);
//Consulta para los datos personales de la categoria
$sql = $con->prepare("INSERT INTO tb_pedido(total, estado) VALUES(?,?)");
$sql->bind_param(
    "ss",
    $total,
    $estado
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
