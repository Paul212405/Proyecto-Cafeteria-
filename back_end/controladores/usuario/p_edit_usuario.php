<?php
include("../../conexion/conexion.php");
include("../../conexion/seguridad.php");
//recuperando datos
$id_usuario = $_POST["txt_codigo"];
$nombre = $_POST["txt_nombre"];
$pass = $_POST['txt_pass'];
$email = $_POST["txt_email"];
$fecha_actualizacion = date("Y-m-d H:i:s");
$tipo = $_POST["tipo"];
$estado = $_POST["estado"];
//Tratando datos
$nombre = trim($nombre);
$email = trim($email);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_usuario SET nombre = ?,password = ?, email = ?, fecha_registro = ?, tipo = ?, estado = ? WHERE id_usuario = ?");
$sql->bind_param(
    "ssssssi",
    $nombre,
    $pass,
    $email,
    $fecha_actualizacion,
    $tipo,
    $estado,
    $id_usuario
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../../Admin/principal.php?t=1'</script>";
