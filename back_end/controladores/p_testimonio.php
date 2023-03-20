<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Pregunta primero si esta logeado el usuario sino lo esta no procesa su solicitud
if (!isset($_SESSION["usuario"])) {
<<<<<<< HEAD
    //Establece un error para poder salir del formulario 
=======
    //EStablece un error para poder salir del formulario 
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
    http_response_code(400);
    exit();
}
//Si esta todo bien empieza el proceso de registro
$usuario = $_SESSION['usuario'];
$id_producto = $_POST['id_producto'];
$valoracion = $_POST['rating'];
$testimonio = $_POST['txa_testimonio'];
$sql = "SELECT * FROM tb_cliente WHERE id_usuario =$usuario";
$result = $con->query($sql);
$r = $result->fetch_array();
$id_cliente = $r['id_cliente'];
//preparar consulta insert
$sql = $con->prepare("INSERT INTO tb_testimonio(id_cliente,testimonio,valoracion,id_producto) VALUES(?,?,?,?)");
$sql->bind_param(
    "ssss",
    $id_cliente,
    $testimonio,
    $valoracion,
    $id_producto
);
$sql->execute();
$con->close();