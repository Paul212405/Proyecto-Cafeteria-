<?php 
include("../conexion/conexion.php"); 
include("../conexion/seguridad.php");
//recuperando datos
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
$sql = $con->prepare("INSERT INTO tb_cliente(nombres,apellidos,direccion,email,celular) VALUES(?,?,?,?,?)");
$sql->bind_param(
    "sssss",
    $nombres,
    $apellidos,
    $direccion,
    $email,
    $celular
);
$sql->execute();
$con->close();

//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=1'</script>";
