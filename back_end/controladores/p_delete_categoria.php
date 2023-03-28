<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_categoria = $_GET["id"];
$sql = $con->prepare("DELETE FROM tb_categoria WHERE id_categoria = ?");
$sql->bind_param("s", $id_categoria);
$sql->execute();
$con->close();
echo "<script>window.location='../../Admin/principal.php?t=5'</script>";
