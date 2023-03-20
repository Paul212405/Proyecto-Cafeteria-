<?php
//Incluye la variable auth por si ya se logeo un usuario
include_once("../utils/head.php");
include("../../back_end/conexion/seguridad.php");
//Pregunta si es admin
echo $_SESSION['tipo'];
if ($_SESSION['tipo'] != "A") {
    header("location: ../index.php");
}
?>

<body class="bg-red-600">

</body>