<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Cargar dato
$id_usuario = $_GET['id'];
//Primero va buscar si este usuario tiene una cuenta cliente
$sql = "SELECT * FROM tb_cliente WHERE id_usuario = $id_usuario";
$result = $con->query($sql);
if (mysqli_num_rows($result) == 0) {
    $sql = $con->prepare("DELETE FROM tb_usuario WHERE id_usuario = ?");
    $sql->bind_param(
        "s",
        $id_usuario
    );
    $sql->execute();
} else {
    //Capturamos el dato del cliente
    $cliente = mysqli_fetch_assoc($result);
    //Iniciamos toda una transaccion para eliminar todos sus datos en cadena
    $con->begin_transaction();
    $id_cliente = $cliente['id_cliente'];
    try {
        // Eliminar los registros relacionados del cliente
        $sql = $con->prepare("DELETE FROM tb_testimonio WHERE id_cliente = ?");
        $sql->bind_param("s", $id_cliente);
        $sql->execute();

        $sql = "SELECT * FROM tb_pedido WHERE id_cliente = $id_cliente";
        $result = $con->query($sql);
        while ($pedido = $result->fetch_array()) {
            $sql = $con->prepare("DELETE FROM detalle_pedido WHERE id_pedido = ?");
            $sql->bind_param("s", $pedido['id_pedido']);
            $sql->execute();
        }

        $sql = $con->prepare("DELETE FROM tb_pedido WHERE id_cliente = ?");
        $sql->bind_param("s", $id_cliente);
        $sql->execute();

        // Eliminar el registro del cliente y usuario
        $sql = $con->prepare("DELETE FROM tb_cliente WHERE id_cliente = ?");
        $sql->bind_param("s", $id_cliente);
        $sql->execute();

        $sql = $con->prepare("DELETE FROM tb_usuario WHERE id_usuario = ?");
        $sql->bind_param(
            "s",
            $id_usuario
        );
        $sql->execute();

        // Confirmar la transacción
        $con->commit();

        echo "Usuario eliminado exitosamente";
    } catch (Exception $e) {
        // Deshacer la transacción en caso de error
        $con->rollback();

        echo "Error al eliminar el usuario: " . $e->getMessage();
    }
}
$con->close();
header("location: ../../Admin/principal.php?t=1");
