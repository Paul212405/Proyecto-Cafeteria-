<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
$precio = $_POST["txt_precio"];
$stock = $_POST["txt_stock"];
$estado = $_POST["estado"];
$categoria = $_POST["categoria"];
//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
$precio = trim($precio);
$stock = trim($stock);
$estado = trim($estado);
//Consulta para los datos personales del producto
$sql = $con->prepare("INSERT INTO tb_producto(nombre, descripcion, precio, stock, estado,id_categoria) VALUES(?,?,?,?,?,?)");
$sql->bind_param(
    "ssssss",
    $nombre,
    $descripcion,
    $precio,
    $stock,
    $estado,
    $categoria
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
