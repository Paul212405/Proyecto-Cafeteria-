<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");
//Pregunta primero si esta logeado el usuario sino lo esta no procesa su solicitud
if (!isset($_SESSION["usuario"])) {
    //Establece un error para poder salir del formulario 
    http_response_code(400);
    exit();
}
//recuperando datos
$id_producto = $_POST['id_producto'];
$precio = $_POST['precio'];
$cantidad = $_POST['txt_cantidad'];
if ($cantidad <= 0) {
    http_response_code(400);
    exit();
}
$usuario = $_SESSION["usuario"];
//Obtener id cliente
$sql = "SELECT * FROM tb_cliente WHERE id_usuario =$usuario";
$result = $con->query($sql);
$r = $result->fetch_array();
$id_cliente = $r['id_cliente'];
$subtotal = $cantidad*$precio;
$total = 0;
$estado = "carrito";
//Ahora si a genera el pedido con su detalle con el estado carrito porque aun no se finaliza pedido, se crea un pedido solo si el usuario no tiene un carrito pendiente
if ($_SESSION['pedido'] == 0 && $_SESSION['estado_pedido'] == "espera") {
    //Iniciamos la transaccion
    $con->begin_transaction();
   
    //Realizamo la consulta del pedido
    $sql = $con->prepare("INSERT INTO tb_pedido(id_cliente,total,estado) VALUES(?,?,?)");
    $sql->bind_param(
        "sss",
        $id_cliente,
        $total,
        $estado
    );
    $sql->execute();
    //Obtener id del ultimo pedido insertado
    $id_pedido = $con->insert_id;
    $_SESSION['pedido'] = $id_pedido;
    $_SESSION['estado_pedido'] = "carrito";
    //Realizamos la consulta del detalle pedido
    $sql = $con->prepare("INSERT INTO detalle_pedido(id_pedido,id_producto,cantidad,sub_total) VALUES(?,?,?,?)");
    $sql->bind_param(
        "ssss",
        $id_pedido,
        $id_producto,
        $cantidad,
        $subtotal
    );
    $sql->execute();
    $con->commit();
    //Ahora actualizamos el total del pedido
    $sql = "SELECT SUM(sub_total) as total FROM detalle_pedido WHERE id_pedido = $id_pedido";
    $result = $con->query($sql);
    $r = $result->fetch_array();
    $total = $r['total'];

    $sql = $sql = $con->prepare("UPDATE tb_pedido SET total = ? WHERE id_pedido = ?");
    $sql->bind_param(
        "ss",
        $total,
        $id_pedido
    );
    $sql->execute();
    //
    $con->close();
} else {
    //Realizamos la consulta del detalle pedido
    $sql = $con->prepare("INSERT INTO detalle_pedido(id_pedido,id_producto,cantidad,sub_total) VALUES(?,?,?,?)");
    $sql->bind_param(
        "ssss",
        $_SESSION['pedido'],
        $id_producto,
        $cantidad,
        $subtotal
    );
    $sql->execute();
    //Ahora actualizamos el total del pedido
    $id_pedido =  $_SESSION['pedido'];
    $sql = "SELECT SUM(sub_total) as total FROM detalle_pedido WHERE id_pedido = $id_pedido";
    $result = $con->query($sql);
    $r = $result->fetch_array();
    $total = $r['total'];

    $sql = $sql = $con->prepare("UPDATE tb_pedido SET total = ? WHERE id_pedido = ?");
    $sql->bind_param(
        "ss",
        $total,
        $id_pedido
    );
    $sql->execute();
    //
    $con->close();
}
