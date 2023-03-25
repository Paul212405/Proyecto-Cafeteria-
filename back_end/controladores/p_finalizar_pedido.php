<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Primero preguntamos si el cliente ya actualizo su direccion de facturacion
$id_usuario = $_SESSION['usuario'];
$sql = "SELECT direccion_facturacion FROM tb_cliente WHERE id_usuario = $id_usuario";
$result = $con->query($sql);
$cliente = $result->fetch_array();
//Y verificar que el pedido no este en 0
$id_pedido = $_SESSION['pedido'];
$sql = "SELECT total FROM tb_pedido WHERE id_pedido = $id_pedido";
$result = $con->query($sql);
$pedido = $result->fetch_array();
if ($pedido['total'] > 0) {
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
    //header("location: ../../index.php");
    echo "<script>window.location='../../index.php'</script>";
} else {
    //header("location: ../../pedido.php?d=incompleto");
    echo "<script>window.location='../../pedido.php?d=incompleto'</script>";
}
}else{
    //header("location: ../../index.php");
    echo "<script>window.location='../../index.php'</script>";
}
