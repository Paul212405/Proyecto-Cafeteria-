<?php
//Incluye la variable auth por si ya se logeo un usuario
include("../back_end/conexion/seguridad_admin.php");
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
        case 2:
            $_GET['t'];
            echo "<script>
                window.addEventListener('load', function() {
                    cargarcomponente('./paginas/cliente.php','contenedor_admin')
                });
                </script>";
            break;
        case 3:
            $_GET['t'];
            echo "<script>
                window.addEventListener('load', function() {
                    cargarcomponente('./paginas/testimonio.php','contenedor_admin')
                });
                </script>";
            break;
        case 4:
            $_GET['t'];
            echo "<script>
                    window.addEventListener('load', function() {
                        cargarcomponente('./paginas/producto.php','contenedor_admin')
                    });
                    </script>";
            break;
        case 5:
            $_GET['t'];
            echo "<script>
                        window.addEventListener('load', function() {
                            cargarcomponente('./paginas/categoria.php','contenedor_admin')
                        });
                        </script>";
            break;
        case 6:
            $_GET['t'];
            echo "<script>
                            window.addEventListener('load', function() {
                                cargarcomponente('./paginas/pedido.php','contenedor_admin')
                            });
                            </script>";
    }
}
?>
<script src="./js/interfaz_admin.js"></script>

<script>
    //Evento que se activa al cargar la pagina
    window.addEventListener('load', function() {
        cargarcomponente('./paginas/resumen.php','contenedor_admin')
    });
</script>

<body class="bg-slate-200 ">
    <div class="block lg:flex justify-start items-start absolute top-0 left-0 right-0">
        <?php include("components/navigate.php"); ?>
        <div id="contenedor_admin" class="z-0 block grow max-lg:w-full">

        </div>
    </div>
</body>