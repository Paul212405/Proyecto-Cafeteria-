<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Primero preguntamos si el cliente ya actualizo su direccion de facturacion
$direccion = $_GET["direccion"];
if ($direccion != "") {
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
    header("location:  ../../front_end/index.php");
} else {
    header("location:  ../../front_end/pedido.php?d=incompleto");
}
