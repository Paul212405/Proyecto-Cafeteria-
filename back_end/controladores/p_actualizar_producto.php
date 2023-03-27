<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$idcliente = $_SESSION["cliente"];
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
$sql = $con->prepare("UPDATE tb_cliente SET nombres = ?, 
   apellidos = ?, 
   direccion = ?,  
   email = ?,  
   celular = ?  
   WHERE id_usuario = ?");
$sql->bind_param(
    "sssssi",
    $nombres,
    $apellidos,
    $direccion,
    $email,
    $celular,
    $idusuario
);
$sql->execute();
//Para actualizar cliente
$idproducto = $_SESSION["producto"];
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
$precio = $_POST["txt_precio"];
$stock = $_POST["txt_stock"];
$estado = $_POST["txt_estado"];
if ($nombre != "" && $descripcion != "" && $precio != "" && $stock != "" && $estado != "") {
    $sql = $con->prepare("UPDATE tb_producto SET nombre = ?, 
   descripcion = ?, 
   precio = ?, 
   stock = ?, 
   estado = ?, 
   WHERE id_producto = ?");
    $sql->bind_param(
        "isssss",
        $idproducto,
        $nombre,
        $descripcion,
        $precio,
        $stock,
        $estado,
    );
    $sql->execute();
}
$con->close(); 
//header("location: ../../cuenta.php");
echo "<script>window.location='../../cuenta.php'</script>";
