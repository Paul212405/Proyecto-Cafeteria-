<?php
include("../../back_end/conexion/conexion.php");

$id_cliente = $_GET['id'];
$sql = "select * from tb_cliente where id_cliente=$id_cliente";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL CLIENTE ::: MODIFICAR DATOS</h1>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/cliente/p_edit_cliente.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Codigo</label>
                        <div class="w-full my-4">
                            <input type="text" name="txt_codigo" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" value="<?php echo $id_cliente ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Nombres</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombres" placeholder="Nombres" value="<?php echo $row['nombres']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Apellidos</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Direccion</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Email</label>
                        <div class="w-full my-4">
                            <input type="email" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_email" placeholder="Correo electronico" value="<?php echo $row['email']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Celular</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_celular" placeholder="Celular" value="<?php echo $row['celular']; ?>">
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center mt-3 gap-2">
                        <div class="w-1/2 flex justify-center">
                            <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-save mr-2"></i> Guardar Datos</button>
                        </div>
                        <div class="w-1/2 flex justify-center">
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_cliente');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
</section>