<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idcategoria = $_SESSION["categoria"];
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_categoria SET nombre = ?,  
   descripcion = ?  
   WHERE id_categoria = ?");
$sql->bind_param(
    "ssi",
    $nombre,
    $descripcion,
    $idcategoria
);
$sql->execute();
//Para actualizar cliente
$idcategoria = $_SESSION["categoria"];
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
if ($nombre != "" && $descripcion != "" ) {
    $sql = $con->prepare("UPDATE tb_categoria SET nombre = ?, 
   descripcion = ? 
   WHERE id_categoria = ?");
    $sql->bind_param(
        "iss",
        $idcategoria,
        $nombre,
        $descripcion
    );
    $sql->execute();
}
$con->close(); 
//header("location: ../../cuenta.php");
echo "<script>window.location='../../cuenta.php'</script>";
