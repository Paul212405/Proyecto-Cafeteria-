<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Recibiendo los datos
$nombres = $_POST['txt_nombres'];
$apellidos = $_POST['txt_apellidos'];
$correo = $_POST['txt_correo'];
$pass = $_POST['txt_pass'];
$c = 'C';
$estado = "A";
if ($nombres == "" || $apellidos == "" || $correo  == "" || $pass == "") {
    http_response_code(400);
    exit();
}
//Explode quita lo espacios a la cadena y implde lo une sin espacios
$usuario = implode("", explode(" ", $nombres));
//preparar consulta insert para insertar usuario 
$con->begin_transaction();    
$sql = $con->prepare("INSERT INTO tb_usuario(nombre,password,email,tipo,estado) VALUES(?,?,?,?,?)");
$sql->bind_param(
    "sssss",
    $usuario,
    $pass,
    $correo,
    $c,
    $estado
);
$sql->execute();
//Primero obtenemos el ultimo usuario creado
$id_usuario = $con->insert_id;

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
$con->commit();
$con->close();
