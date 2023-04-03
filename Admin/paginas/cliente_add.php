<?php
include("../../back_end/conexion/conexion.php");
//Los usuarios
$sql = "SELECT * FROM tb_usuario WHERE estado = 'I'";
//Obtener los usuario que necesitan una cuenta cliente
$resultado = $con->query($sql);
?>
<section class="block">
    <div class="justify-center lg:ml-72 lg:px-5 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%] lg:w-[60%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl px-5">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL CLIENTE ::: AGREGAR DATOS</h1>
                    <div class="flex justify-center items-center w-full">
                        <img class="w-28 h-28" src="../Public/images/negocio/cliente1.png" />
                    </div>
                </div>
                <?php
                if (mysqli_num_rows($resultado) > 0) {
                ?>
                    <form class="px-4 py-5" method="POST" action="./../back_end/controladores/cliente/p_add_cliente.php">
                        <div class="w-full block">
                            <label class="text-lg font-semibold pb-4">Nombres</label>
                            <div class="w-full my-4">
                                <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombres" placeholder="Nombres del cliente" required>
                            </div>
                        </div>
                        <div class="w-full block">
                            <label class="text-lg font-semibold pb-4">Apellidos</label>
                            <div class="w-full my-4">
                                <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_apellidos" placeholder="Apellidos del cliente" required>
                            </div>
                        </div>
                        <div class="w-full block">
                            <label class="text-lg font-semibold pb-4">Direccion</label>
                            <div class="w-full my-4">
                                <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_direccion" placeholder="Ingrese direccion" required>
                            </div>
                        </div>
                        <div class="w-full block">
                            <label class="text-lg font-semibold pb-4">Email</label>
                            <div class="w-full my-4">
                                <input type="email" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_email" placeholder="Ingrese email" required>
                            </div>
                        </div>
                        <div class="w-full block">
                            <label class="text-lg font-semibold pb-4">Celular</label>
                            <div class="w-full my-4">
                                <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_celular" placeholder="Ingrese celular" required maxlength="9">
                            </div>
                        </div>
                        <div class="w-full block" >
                            <label class="text-lg font-semibold pb-4">Usuario</label>
                            <div class="w-full my-4">
                                <select name="usuario" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                    <?php
                                    while ($usuarios = $resultado->fetch_array()) {
                                    ?>
                                        <option value="<?php echo $usuarios['id_usuario'] ?>">
                                            <?php echo $usuarios['nombre'] ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                            </div>
                        </div>
                        <div class="flex justify-center lg:px-0">
                            <div class="flex justify-center px-1 flex-1">
                                <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3  text-sm font-bold text-white"><i class="fa fa-save mr-2"></i> Guardar Datos</button>
                            </div>
                            <div class="flex justify-center flex-1">
                                <button onclick="cargarcomponente('./paginas/close.php','contenedor_cliente');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                            </div>
                        </div>
                    </form>

                <?php
                } else {
                    echo "No hay cuentas clientes pendientes por añadir";
                }
                ?>
            </div>
        </div>
    </div>
</section>