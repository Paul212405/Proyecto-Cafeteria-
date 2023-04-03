<?php
include("../../back_end/conexion/conexion.php");
//Los clientes 
$sql = "SELECT id_cliente,CONCAT(apellidos,' ',nombres) as nombre FROM tb_cliente";
$result_cliente = $con->query($sql);
//Los productos
$sql = "SELECT * FROM tb_producto";
$result_producto = $con->query($sql);
?>
<section class="block">
    <div class="justify-center lg:ml-72 lg:px-5 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%] lg:w-[60%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl px-5">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL TESTIMONIO ::: AGREGAR DATOS</h1>
                    <div class="flex justify-center items-center w-full">
                        <img class="w-28 h-28" src="../Public/images/negocio/testimonio1.png" />
                    </div>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/testimonio/p_add_testimonio.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Cliente</label>
                        <div class="w-full my-4">
                            <select name="cliente" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <?php
                                while ($clientes = $result_cliente->fetch_array()) {
                                ?>
                                    <option value="<?php echo $clientes['id_cliente'] ?>" class="text-lg font-light">
                                        <?php echo $clientes['nombre'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Testimonio</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_testimonio" placeholder="Ingrese testimonio" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Valoración</label>
                        <div class="w-full my-4">
                            <input type="number" min="1" max="5" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_valoracion" placeholder="Ingrese Valoracion" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Producto</label>
                        <div class="w-full my-4">
                            <select name="producto" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <?php
                                while ($productos = $result_producto->fetch_array()) {
                                ?>
                                    <option value="<?php echo $productos['id_producto'] ?>" class="text-lg font-light">
                                        <?php echo $productos['nombre'] ?>
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
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_testimonio');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
</section>