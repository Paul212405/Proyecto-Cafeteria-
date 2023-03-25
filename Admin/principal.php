<?php
//Incluye la variable auth por si ya se logeo un usuario
include("../back_end/conexion/seguridad.php");
//Pregunta si es admin
if ($_SESSION['tipo'] != "A") {
    //header("location: ../index.php");
    echo "<script>window.location='../index.php'</script>";
}
include_once("utils/head.php");
//Si se envio la edicion de una tabla
if (isset($_GET['t'])) {
    switch ($_GET['t']) {
        case 1:
            $_GET['t'];
            echo "<script>
            window.addEventListener('load', function() {
                cargarcomponente('./paginas/usuario.php','contenedor_admin')
            });
            </script>";
            break;

        default:
            # code...
            break;
    }
}
?>
<script src="./js/interfaz_admin.js"></script>

<body class="bg-slate-200 ">
    <div class="block lg:flex justify-start items-start absolute top-0 left-0 right-0">
        <?php include("components/navigate.php"); ?>
        <div id="contenedor_admin" class="z-0 block grow max-lg:w-full">

        </div>
    </div>
</body>