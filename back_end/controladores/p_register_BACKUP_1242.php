<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Recibiendo los datos
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$correo = $_POST['txt_correo'];
$pass = $_POST['txt_pass'];
<<<<<<< HEAD
$c = 'C';
if ($nombres == "" || $apellidos == "" || $correo  == "" || $pass == "") {
    http_response_code(400);
    exit();
}
//Explode quita lo espacios a la cadena y implde lo une sin espacios
$usuario = implode("", explode(" ", $nombres));
=======
$c='C';
//Explode quita lo espacios a la cadena y implde lo une sin espacios
$usuario =implode("",explode(" ",$nombres));
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
//preparar consulta insert para insertar usuario 
$sql = $con->prepare("INSERT INTO tb_usuario(nombre,password,email,tipo) VALUES(?,?,?,?)");
$sql->bind_param(
    "ssss",
    $usuario,
    $pass,
    $correo,
    $c
);
$sql->execute();
//Primero obtenemos el ultimo usuario creado
$sql = "SELECT id_usuario FROM tb_usuario WHERE nombre='$usuario' and password = '$pass'";
$result = $con->query($sql);
$usuario = $result->fetch_array();
$id_usuario = $usuario['id_usuario'];
//Automaticamente se le crea su cuenta de cliente
$sql = $con->prepare("INSERT INTO tb_cliente(nombres,apellidos,email,id_usuario) VALUES(?,?,?,?)");
$sql->bind_param(
    "ssss",
    $nombres,
    $apellidos,
    $correo,
    $id_usuario
);
$sql->execute();
<<<<<<< HEAD
$con->close();
=======
$con->close();
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
