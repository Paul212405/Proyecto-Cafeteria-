<?php
include_once("utils/head.php");
?>
<?php include("components/navigate.php") ?>

<body class="bg-[url('https://www.xtrafondos.com/wallpapers/resized/paisaje-digital-en-atardecer-5846.jpg?s=large')] bg-cover">
    <div class="block text-center my-10 text-3xl font-bold">
        <h1>CONTACTENOS</h1>
    </div>
    </div>
    <div class="w-full bg-white">
        <div class="container mx-auto bg-white">
            <div class="flex justify-between items-center flex-wrap px-10 py-12">
                <!--Bloque de login-->
                <div class="block w-full sm:w-2/5 ">
                    <p class="text-xl font-bold my-4 text-center">INICIAR SESION</p>
                    <form action="p_login.php" method="post">
                        <div class="block py-2">
                            <label class=" pr-8">Nombre de usuario o correo electronico</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_usuario">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Contraseña</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_password">
                        </div>
                        <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90" type="submit" value="INGRESAR">
                    </form>
                </div>
                <!--Bloque de barra lateral-->
                <div class="hidden sm:block w-0.5 h-96 border-black/10 border"></div>
                <!--Bloque de consulta-->
                <div class="block w-full sm:w-2/5 ">
                    <p class="text-xl font-bold my-4 text-center">ESCRIBANOS</p>
                    <form action="p_login.php" method="post">
                        <div class="block py-2">
                            <label class=" pr-8">Nombre Completo</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_nombre_completo">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Correo Electronico</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="email" name="txt_correo">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Telefono</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_tel">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Asunto</label>
                            <textarea class="w-full border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" rows="3" name="txa_asunto"></textarea>
                        </div>
                        <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90" type="submit" value="ENVIAR CONSULTA">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("components/footer.php") ?>