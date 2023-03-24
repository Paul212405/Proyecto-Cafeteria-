<?php
include("auth.php");
//Protegera los links a donde nadie puede tener acceso
if($_SESSION["auth"] != 1){
    header("location: ../../index.php");
}