<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$id_cliente = $_POST["txt_codigo"];
$nombres = $_POST["txt_nombres"];
$apellidos = $_POST["txt_apellidos"];
$direccion = $_POST["txt_direccion"];
$email = $_POST["txt_email"];
$celular = $_POST["txt_celular"];
//Tratando datos
$nombres = trim($nombres);
$apellidos = trim($apellidos);
$direccion = trim($direccion);
$email = trim($email);
$celular = trim($celular);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_cliente SET nombres = ?, apellidos = ?, direccion = ?, email = ?, celular = ? WHERE id_cliente = ?");
$sql->bind_param(
    "sssssi",
    $nombres,
    $apellidos,
    $direccion,
    $email,
    $celular,
    $id_cliente
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
