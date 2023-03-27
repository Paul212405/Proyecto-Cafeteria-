<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_categoria = $_POST["txt_categoria"];
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_categoria SET nombre = ?, descripcion = ? WHERE id_categoria = ?");
$sql->bind_param(
    "ssi",
    $nombre,
    $descripcion,
    $id_categoria
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
