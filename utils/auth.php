<?php
include("back_end/conexion/conexion.php");
    include("back_end/conexion/auth.php");
    //Se pregunta si ya se logeo un usuario
    if(isset($_SESSION["auth"])){
    $idusuario = $_SESSION["usuario"];
    $auth = $_SESSION["auth"];
    }else{
        $auth = 0;
    }