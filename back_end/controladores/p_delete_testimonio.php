<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_testimonio = $_GET["id"];
$sql = $con->prepare("DELETE FROM tb_testimonio WHERE id_testimonio = ?");
$sql->bind_param("s", $id_testimonio);
$sql->execute();
echo "<script>window.location='../../Admin/principal.php?t=3'</script>";
