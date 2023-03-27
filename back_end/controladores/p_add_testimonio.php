<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$testimonio = $_POST["txt_testimonio"];
$valoracion = $_POST["txt_valoracion"];
$cliente = $_POST["cliente"];
$producto = $_POST["producto"];
//Tratando datos
$testimonio = trim($testimonio);
$valoracion = trim($valoracion);
//Consulta para los datos personales del usuario
$sql = $con->prepare("INSERT INTO tb_testimonio(testimonio, valoracion,id_cliente,id_producto) VALUES(?,?,?,?)");
$sql->bind_param(
    "ssss",
    $testimonio,
    $valoracion,
    $cliente,
    $producto
);
$sql->execute();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=3'</script>";
