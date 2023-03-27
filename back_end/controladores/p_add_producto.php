<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
$precio = $_POST["txt_precio"];
$stock = $_POST["txt_stock"];
$estado = $_POST["txt_estado"];
//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
$precio = trim($precio);
$stock = trim($stock);
$estado = trim($estado);
//Consulta para los datos personales del producto
$sql = $con->prepare("INSERT INTO tb_producto(nombre, descripcion, precio, stock, estado) VALUES(?,?,?,?,?)");
$sql->bind_param(
    "sssss",
    $nombre,
    $descripcion,
    $precio,
    $stock,
    $estado
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
