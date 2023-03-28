<?php
include("../../conexion/conexion.php");
include("../../conexion/seguridad.php");
//Cargar dato
$id_cliente = $_GET['id'];

$sql = "SELECT * FROM tb_cliente where id_cliente=$id_cliente";
$result = $con->query($sql); 
$cliente = mysqli_fetch_assoc($result);
$id_usuario = $cliente['id_usuario'];

//Iniciamos toda una transaccion para eliminar todos sus datos en cadena
$con->begin_transaction();
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

        echo "Cliente eliminado exitosamente";
    } catch (Exception $e) {
        // Deshacer la transacción en caso de error
        $con->rollback();

        echo "Error al eliminar el cliente: " . $e->getMessage();
    }

$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../../Admin/principal.php?t=2'</script>";
