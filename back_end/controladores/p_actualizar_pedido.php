<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idpedido = $_SESSION["pedido"];
$total = $_POST["txt_total"];
$estado = $_POST["txt_estado"];
//Tratando datos
$total = trim($total);
$estado = trim($estado);
//Consulta para los datos personales del pedido
$sql = $con->prepare("UPDATE tb_pedido SET total = ?,  
   estado = ?  
   WHERE id_pedido = ?");
$sql->bind_param(
    "ssi",
    $total,
    $estado,
    $idpedido
);
$sql->execute();
//Para actualizar cliente
$idpedido = $_SESSION["pedido"];
$total = $_POST["txt_total"];
$estado = $_POST["txt_estado"];
if ($total != "" && $estado != "") {
    $sql = $con->prepare("UPDATE tb_pedido SET total = ?,  
   estado = ?, 
   WHERE id_pedido = ?");
    $sql->bind_param(
        "iss",
        $idpedido,
        $total,
        $estado
    );
    $sql->execute();
}
$con->close(); 
//header("location: ../../cuenta.php");
echo "<script>window.location='../../cuenta.php'</script>";
