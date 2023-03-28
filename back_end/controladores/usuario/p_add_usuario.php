<?php
include("../../conexion/conexion.php");
include("../../conexion/seguridad.php");
//recuperando datos
$nombre = $_POST["txt_nombre"];
$email = $_POST["txt_email"];
$contra = $_POST["txt_pass"];
$tipo = $_POST["tipo"];
//Tratando datos
$nombre = trim($nombre);
$email = trim($email);
if($tipo == "A"){
    $estado = "A";
}else{
    $estado = "I";
}
//Consulta para los datos personales del usuario
$sql = $con->prepare("INSERT INTO tb_usuario(nombre,password,email,tipo,estado) VALUES(?,?,?,?,?)");
$sql->bind_param(
    "sssss",
    $nombre,
    $contra,
    $email,
    $tipo,
    $estado
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../../Admin/principal.php?t=1'</script>";
