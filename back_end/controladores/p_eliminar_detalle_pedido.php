<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Recibiendo datos
$id_detalle = $_POST['detalle'];
$sql = $con->prepare("DELETE FROM detalle_pedido WHERE id_det_pedido = ?");
$sql->bind_param(
    "s",
    $id_detalle
);
$sql->execute();
//Ahora actualizamos el total del pedido
$id_pedido = $_SESSION['pedido'];
$sql = "SELECT SUM(sub_total) as total FROM detalle_pedido WHERE id_pedido = $id_pedido";
$result = $con->query($sql);
$r = $result->fetch_array();
$total = $r['total'];

$sql = $sql = $con->prepare("UPDATE tb_pedido SET total = ? WHERE id_pedido = ?");
$sql->bind_param(
    "ss",
    $total,
    $id_pedido
);
$sql->execute();
//
$con->close();