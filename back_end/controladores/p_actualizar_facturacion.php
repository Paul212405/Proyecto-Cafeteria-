<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idusuario = $_SESSION["usuario"];
$direccion = $_POST["txt_direccion"];
//Tratando datos
$direccion = trim($direccion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_cliente SET direccion_facturacion = ?
   WHERE id_usuario = ?");
$sql->bind_param(
    "ss",
    $direccion,
    $idusuario
);
$sql->execute();
$con->close();
//header("location: ../../cuenta.php");
echo "<script>window.location='../../cuenta.php'</script>";
