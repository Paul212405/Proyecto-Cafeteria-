<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idusuario = $_SESSION["usuario"];
$nombre = $_POST["txt_nombres"];
$apellido = $_POST["txt_apellidos"];
$direccion = $_POST["txt_direccion"];
$email = $_POST["txt_email"];
$celular = $_POST["txt_celular"];
//Tratando datos
$nombre = trim($nombre);
$apellido = trim($apellido);
$direccion = trim($direccion);
$email = trim($email);
$celular = trim($celular);
//Consulta para los datos personales del cliente
$sql = $con->prepare("UPDATE tb_cliente SET nombres = ?, 
   apellidos = ?, 
   direccion = ?,  
   email = ?,  
   celular = ?  
   WHERE id_usuario = ?");
$sql->bind_param(
    "ssssss",
    $nombre,
    $apellido,
    $direccion,
    $email,
    $celular,
    $idusuario
);
$sql->execute();
//Para actualizar usuario
$usuario = $_POST["txt_usuario"];
$contra_nueva = $_POST["txt_nueva_contra"];
$conf = $_POST['txt_act_contra'];
$con_nueva = $_POST['txt_con_contra'];
if ($contra_nueva != "" && $conf != "" && $con_nueva != "") {
    $sql = $con->prepare("UPDATE tb_usuario SET nombre = ?, 
   password = ? 
   WHERE id_usuario = ?");
    $sql->bind_param(
        "sss",
        $usuario,
        $contra_nueva,
        $idusuario
    );
    $sql->execute();
}
$con->close();
header("location: ../../cuenta.php");
