<?php
include("auth.php");
//Protegera los links a donde nadie puede tener acceso
if(!isset($_SESSION['auth'])){
    echo "<script>window.location='../index.php'</script>";
}
if($_SESSION["auth"] != 1){
    //header("location: ../../index.php");
    echo "<script>window.location='../index.php'</script>";
}