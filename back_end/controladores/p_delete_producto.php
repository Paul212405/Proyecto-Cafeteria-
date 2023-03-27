<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_producto = $_GET["id"];
$sql = $con->prepare("DELETE FROM tb_producto WHERE id_producto = ?");
$sql->bind_param("s", $id_producto);
$sql->execute();
echo "<script>window.location='../../Admin/principal.php?t=4'</script>";
