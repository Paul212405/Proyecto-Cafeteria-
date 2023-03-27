<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
//Consulta para los datos personales de la categoria
$sql = $con->prepare("INSERT INTO tb_categoria(nombre, descripcion) VALUES(?,?)");
$sql->bind_param(
    "ss",
    $nombre,
    $descripcion
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
