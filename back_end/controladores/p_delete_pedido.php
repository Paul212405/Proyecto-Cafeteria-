<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Cargar dato
$id_pedido = $_GET['id'];

//Iniciamos toda una transaccion para eliminar todos sus datos en cadena
$con->begin_transaction();
    try {
        
        // Eliminar los registros relacionados con el pedido
        $sql = $con->prepare("DELETE FROM detalle_pedido WHERE id_pedido = ?");
        $sql->bind_param("s", $id_pedido);
        $sql->execute();

        // Eliminar el pedido
        $sql = $con->prepare("DELETE FROM tb_pedido WHERE id_pedido = ?");
        $sql->bind_param("s", $id_pedido);
        $sql->execute();

        // Confirmar la transacción
        $con->commit();

        echo "Cliente eliminado exitosamente";
    } catch (Exception $e) {
        // Deshacer la transacción en caso de error
        $con->rollback();

        echo "Error al eliminar el pedido: " . $e->getMessage();
    }

$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=6'</script>";
