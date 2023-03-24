<?php
include("../conexion/conexion.php");
include("../conexion/seguridad.php");

$usuario = $_POST["txt_usuario"];
$password = $_POST["txt_password"];

$sql = "SELECT * FROM tb_usuario 
        WHERE nombre = '$usuario' 
        AND password = '$password'";


$result = $con->query($sql);
$r = $result->fetch_array();
$existeUsuario = $result->num_rows;

if ($existeUsuario <= 0) {
    header("location: ../../index.php");
} else {
    if ($r['estado'] == "A") {
        $idusuario = $r["id_usuario"];
        $tipousuario = $r["tipo"];

        //Se crea las variables de session de id usario y su tipo
        $_SESSION["usuario"] = $idusuario;
        $_SESSION["tipo"] = $tipousuario;

        //Y una varaible que nos permite saber si estamos logeados
        $_SESSION["auth"] = 1;

        //Ahora obtenemos el ultimo pedido del cliente para generar su carrito a penas se logea
        //Primero obtenemos el id_cliente
        if ($_SESSION["tipo"] == 'C') {
            $sql = "SELECT * FROM tb_cliente WHERE id_usuario =$idusuario";
            $result = $con->query($sql);
            $r = $result->fetch_array();
            $id_cliente = $r['id_cliente'];
            //
            $sql = "SELECT id_pedido,estado FROM tb_pedido WHERE id_cliente = $id_cliente";
            $result = $con->query($sql);
            $_SESSION['pedido'] = 0;
            $_SESSION['estado_pedido'] = "espera";
            if (mysqli_num_rows($result) > 0) {
                while ($r = $result->fetch_array()) {
                    if ($r['estado'] == "carrito") {
                        $_SESSION['pedido'] = $r['id_pedido'];
                        $_SESSION['estado_pedido'] = "carrito";
                        break;
                    }
                }
            }
            header("location: ../../index.php");
            // usuario "normal";
        } else if ($_SESSION["tipo"] == 'A') {
            header("location: ../../Admin/principal.php");
            // usuario "admin";
        }
    }else{
        header("location: ../../index.php");
    }
}
