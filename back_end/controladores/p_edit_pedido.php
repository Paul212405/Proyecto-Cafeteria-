<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_pedido = $_POST["txt_codigo"];
$estado = $_POST["estado"];
$observaciones = $_POST["txa_observaciones"];
//Tratando datos
$observaciones = trim($observaciones);
if ($estado != "carrito") {
    $fecha = date("Y-m-d H:i:s");

    $sql = $con->prepare("UPDATE tb_pedido SET estado = ?,observaciones = ?,fecha_pedido = ? WHERE id_pedido = ?");
    $sql->bind_param(
        "ssss",
        $estado,
        $observaciones,
        $fecha,
        $id_pedido
    );
    $sql->execute();
} else {
    //Consulta para los datos personales del cliente
    $sql = $con->prepare("UPDATE tb_pedido SET estado = ?,observaciones = ? WHERE id_pedido = ?");
    $sql->bind_param(
        "sss",
        $estado,
        $observaciones,
        $id_pedido
    );
    $sql->execute();
}
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=6'</script>";
