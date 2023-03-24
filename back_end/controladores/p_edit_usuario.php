<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_usuario = $_POST["txt_codigo"];
$nombre = $_POST["txt_nombre"];
$email = $_POST["txt_email"];
$fecha_actualizacion = $_POST["fecha"];
$tipo = $_POST["tipo"];
$estado = $_POST["estado"];
//Tratando datos
$nombre = trim($nombre);
$email = trim($email);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_usuario SET nombre = ?, email = ?, fecha_registro = ?, tipo = ?, estado = ? WHERE id_usuario = ?");
$sql->bind_param(
    "ssssss",
    $nombre,
    $email,
    $fecha_actualizacion,
    $tipo,
    $estado,
    $id_usuario
);
$sql->execute();
$con->close();
header("location: ../../front_end/Admin/principal.php?t=1");
