<div id="b-login" class="hidden bg-black/70 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0"></div>
<div id="m-login" class="hidden bg-white min-h-screen w-80 fixed top-0 right-0">
    <div class="block">
        <div class="flex items-center justify-between w-full p-3 font-bold text-lg border-b-2 border-b-black/20">
            <p>INICIAR SESION</p>
            <button onclick="ocultar_login()">
                <img class="h-6 w-6" src="./images/cerrar.png" alt="x">
            </button>
        </div>
        <div class="block justify-between w-full p-3 text-base border-b-2 border-b-black/20">
            <form action="p_login.php" method="post">
                <div class="block py-2">
                    <label class=" pr-8">Nombre de usuario o correo electronico</label>
                    <br/>
                    <input class="w-full h-12 border-2 border-gray-200 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_usuario">
                </div>
                <div class="block py-2">
                    <label class=" pr-8">Contraseña</label>
                    <br/>
                    <input class="w-full h-12 border-2 border-gray-200 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_password">
                </div>
                <input class="w-full mt-2 h-12 rounded-md bg-pink-800 text-white font-bold hover:bg-pink-800/90" type="submit" value="INGRESAR">
            </form>
        </div>
    </div>
</div>