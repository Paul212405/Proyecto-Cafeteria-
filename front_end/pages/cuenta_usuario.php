<?php
include_once("utils/head.php");
?>
<?php include("components/navigate.php") ?>
<!--Llamando a nuestro script que cambia el contenido-->
<script src="./scritps/interfaz_usuario.js"></script>

<body class="bg-[url('../images/registro_imagen_fondo.png')] bg-cover">
    <div class="block text-center my-10 text-3xl pt-16 font-bold">
        <h1>MI CUENTA</h1>
    </div>
    </div>
    <div class="w-full bg-white">
        <div class="w-full mx-auto bg-white">
            <div class="flex justify-between items-start flex-wrap px-10 py-12">
                <!--Bloque de registro-->
                <div class="block w-full sm:w-1/4 ">
                    <p class="text-xl font-bold my-4 pl-2 text-left border-b-2 border-gray-600/40 leading-10">MI CUENTA</p>
                    <ul class="block">
                        <button class="w-full text-start" onclick="cargarinterfaz('./pages/cuenta_datos.php','contenedor_usuario')">
                            <li class="py-4 hover:bg-gray-200 pl-2">Datos Personales</li>
                        </button>
                        <button class="w-full text-start" onclick="cargarinterfaz('./pages/cuenta_direccion.php','contenedor_usuario')">
                            <li class="py-4 hover:bg-gray-200 pl-2">Direccion de Facturacion</li>
                        </button>
                        <button class="w-full text-start" onclick="cargarinterfaz('./pages/cuenta_pedidos.php','contenedor_usuario')">
                            <li class="py-4 hover:bg-gray-200 pl-2">Pedidos</li>
                        </button>
                        <a href="./../back_end/conexion/cerrarsesion.php">
                            <li class="py-4 hover:bg-gray-200 pl-2">Salir de mi cuenta</li>
                        </a>
                    </ul>
                </div>
                <!--Bloque de barra lateral-->
                <div class="hidden sm:block w-0.5 h-[35em] border-black/10 border"></div>
                <!--Bloque de login-->
                <div id="contenedor_usuario" class="block w-full sm:w-2/3 ">
                    
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("components/footer.php") ?>