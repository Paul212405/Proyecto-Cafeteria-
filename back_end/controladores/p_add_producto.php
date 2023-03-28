<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//recuperando datos
$nombre = $_POST["txt_nombre"];
$descripcion = $_POST["txt_descripcion"];
$precio = $_POST["txt_precio"];
$stock = $_POST["txt_stock"];
$estado = $_POST["estado"];
$categoria = $_POST["categoria"];
//Imagen
$imagen=$_FILES['imagen']['tmp_name'];
$nombre_imagen=$_FILES['imagen']['name'];
list($n,$e)=explode(".", $nombre_imagen);
if ($e!='jpg') {
	// guardar imagen
	echo "<script>window.location='../../Admin/principal.php?t=4'</script>";
}

//Tratando datos
$nombre = trim($nombre);
$descripcion = trim($descripcion);
$precio = trim($precio);
$stock = trim($stock);
$estado = trim($estado);

$con->begin_transaction();
//Consulta para los datos personales del producto
$sql = $con->prepare("INSERT INTO tb_producto(nombre, descripcion, precio, stock, estado,id_categoria) VALUES(?,?,?,?,?,?)");
$sql->bind_param(
    "ssssss",
    $nombre,
    $descripcion,
    $precio,
    $stock,
    $estado,
    $categoria
);
$sql->execute();
//Obtener id del ultimo producto insertado
$id_producto = $con->insert_id;
move_uploaded_file($imagen,"../../Public/images/productos/producto_".$id_producto.".jpg");
$con->commit();
$con->close();
//header("location: ../../Admin/principal.php?t=1");
echo "<script>window.location='../../Admin/principal.php?t=4'</script>";
