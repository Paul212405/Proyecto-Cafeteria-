<div id="b-login" class="hidden bg-black/70 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0"></div>
<div id="m-login" class="hidden bg-white min-h-screen w-80 fixed top-0 right-0">
    <!--Login de inicio de session-->
    <div class="block">
        <div class="flex items-center justify-between w-full p-3 font-bold text-lg border-b-2 border-b-black/20">
            <p>INICIAR SESION</p>
            <button onclick="activar_login()">
                <i class="fas fa-window-close fa-lg text-red-600"></i>
            </button>
        </div>
        <div class="block justify-between w-full p-3 text-base border-b-2 border-b-black/20">
            <form id="no" action="./back_end/controladores/p_login.php" method="post">
                <div class="block py-2">
                    <label class=" pr-8">Nombre de usuario o correo electronico</label>
                    <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_usuario" required>
                </div>
                <div class="block py-2">
                    <label class=" pr-8">Contraseña</label>
                    <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_password" required>
                </div>
                <input class="cursor-pointer w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90" type="submit" value="INGRESAR" required>
            </form>
            <div class="flex items-center justify-between w-full p-3 text-xs">
                <div class="flex items-center justify-around">
                    <input type="checkbox" name="recordar" id="1" value="">
                    <p class="px-2">Recordar</p>
                </div>
                <p class="text-blue-800/90">¿Olvidaste tu contraseña?</p>
            </div>
        </div>
        <div class="block justify-between w-full p-3 text-center text-sm leading-6 border-b-2 border-b-black/20">
            <p>¿Eres nuevo?</p>
            <a href="./registro.php" class="text-xl underline underline-offset-8 decoration-2 decoration-blue-800/90 hover:text-blue-900/50">Registrate</a>
        </div>
    </div>
</div>