<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Primero preguntamos si el cliente ya actualizo su direccion de facturacion
$id_usuario = $_SESSION['usuario'];
$sql = "SELECT direccion_facturacion FROM tb_cliente WHERE id_usuario = $id_usuario";
$result = $con->query($sql);
$cliente = $result->fetch_array();
if ($cliente["direccion_facturacion"] != "") {
    //Vamos a capturar el pedido pendiente
    $id_pedido = $_SESSION['pedido'];
    $fecha_pedido = date('Y-m-d H:i:s');
    $estado = "finalizado";
    $sql = $con->prepare("UPDATE tb_pedido SET fecha_pedido = ?,estado = ? WHERE id_pedido = ?");
    $sql->bind_param(
        "sss",
        $fecha_pedido,
        $estado,
        $id_pedido
    );
    $sql->execute();
    $con->close();
    $_SESSION['pedido'] = 0;
    $_SESSION['estado_pedido'] = "espera";
    header("location: ../../index.php");
} else {
    header("location: ../../pedido.php?d=incompleto");
}
