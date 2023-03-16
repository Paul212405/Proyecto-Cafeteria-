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
        header("location: ../../front_end/index.php");
    } else {
        $idusuario = $r["id_usuario"];
        $tipousuario = $r["tipo"];
        
        $_SESSION["usuario"] = $idusuario;
        $_SESSION["tipo"] = $tipousuario;

        $_SESSION["auth"] = 1;
        
        if ($tipousuario == "C") {
            header("location: ../../front_end/index.php");
            // usuario "normal";
        } else if ($tipousuario == "A") {
            header("location: ../../front_end/index.php");
            // usuario "admin";
        } 
    }
?>