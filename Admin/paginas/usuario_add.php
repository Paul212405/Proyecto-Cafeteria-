<section class="block">
    <div class=" justify-center lg:ml-40 -ml-44  lg:px-5 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[40%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL USUARIO ::: AGREGAR DATOS</h1>
                    <img class="flex w-full lg:px-36 px-10" src="../Public/images/negocio/usuario1.png" />
                </div>
                <form class=" lg:px-20 px-2 py-5 " method="POST" action="./../back_end/controladores/usuario/p_add_usuario.php">
                    <div class="w-full lg:w-96 block">
                        <label class="text-lg font-semibold pb-4">Nombre</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombre" placeholder="Nombre de usuario" required>
                        </div>
                    </div>
                    <div class="w-full lg:w-96 block">
                        <label class="text-lg font-semibold pb-4">Contraseña</label>
                        <div class="w-full my-4">
                            <input type="password" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_pass" placeholder="Ingrese su contraseña" required>
                        </div>
                    </div>
                    <div class="w-full lg:w-96 block">
                        <label class="text-lg font-semibold pb-4">Email</label>
                        <div class="w-full my-4">
                            <input type="email" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_email" placeholder="example@gmail.com" required>
                        </div>
                    </div>
                    <div class="w-full lg:w-96 ">
                        <label class="text-lg font-semibold pb-4 ">Rol</label>
                        <div class="w-full my-4">
                            <select name="tipo" class="w-full sm:w-1/2 h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="C" class="text-lg font-light" selected>
                                    Cliente
                                </option>
                                <option value="A" class="text-lg font-light">
                                    Administrador
                                </option>
                            </select>
                        </div>
                    </div>

                    <div class="flex justify-center lg:px-0 ">
                        <div class="flex justify-center px-1">
                            <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3  text-sm lg:text-lg font-bold text-white"><i class="fa fa-save mr-2"></i> Guardar Datos</button>
                        </div>
                        <div class="flex justify-center ">
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_usuario');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>