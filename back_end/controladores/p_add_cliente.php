<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$nombres = $_POST["txt_nombres"];
$apellidos = $_POST["txt_apellidos"];
$direccion = $_POST["txt_direccion"];
$email = $_POST["txt_email"];
$celular = $_POST["txt_celular"];
$usuario = $_POST['usuario'];
//Tratando datos
$nombres = trim($nombres);
$apellidos = trim($apellidos);
$direccion = trim($direccion);
$email = trim($email);
$celular = trim($celular);

//Consulta para los datos personales del cliente
$sql = $con->prepare("INSERT INTO tb_cliente(nombres,apellidos,direccion,email,celular,id_usuario) VALUES(?,?,?,?,?,?)");
$sql->bind_param(
    "ssssss",
    $nombres,
    $apellidos,
    $direccion,
    $email,
    $celular,
    $usuario
);
$estado = "A";
$sql->execute();
//Actualizamos el estado de su usuario
$sql = $con->prepare("UPDATE tb_usuario SET estado = ? WHERE id_usuario = ?");
$sql->bind_param(
    "ss",
    $estado,
    $usuario
);
$sql->execute();
$con->close();

//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=2'</script>";
