<?php
include_once("utils/head.php");
?>
<?php include("components/navigate.php") ?>
<!--Script para validar el formulario y enviar datos-->
<script src="./scritps/envio_form_registro.js"></script>

<div id="modal"></div>

<body class="bg-[url('../Public/images/negocio/registro.png')] bg-cover">
    <div class="block text-center my-10 text-3xl pt-16 font-bold text-white">
        <h1>REGISTRATE</h1>
    </div>
    </div>
    <div class="w-full bg-white">
        <div class="container mx-auto bg-white">
            <div class="flex justify-between items-center flex-wrap px-10 py-12">
                <!--Bloque de registro-->
                <div class="block w-full sm:w-2/5 ">
                    <p class="text-xl font-bold my-4 text-center">REGISTRARSE</p>
                    <form id="form_register">
                        <div class="block py-2">
                            <label class=" pr-8">Nombres</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_nombres" required>
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Apellidos</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_apellidos" required>
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Correo Electronico</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="email" name="txt_correo" required>
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Contraseña</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_pass" required>
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Repetir Contraseña</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_repetir_pass" required>
                        </div>
                        <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90 cursor-pointer" type="submit" value="CREAR CUENTA">
                    </form>
                </div>
                <!--Bloque de barra lateral-->
                <div class="hidden sm:block w-0.5 h-96 border-black/10 border"></div>
                <!--Bloque de login-->
                <div class="block w-full sm:w-2/5 ">
                    <p class="text-xl font-bold my-4 text-center">INICIAR SESION</p>
                    <form action="./back_end/controladores/p_login.php" method="post">
                        <div class="block py-2">
                            <label class=" pr-8">Nombre de usuario o correo electronico</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_usuario" required>
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Contraseña</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_password" required>
                        </div>
                        <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90 cursor-pointer" type="submit" value="INGRESAR">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("components/footer.php") ?>