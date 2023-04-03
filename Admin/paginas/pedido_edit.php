<?php
include("../../back_end/conexion/conexion.php");

$id_pedido = $_GET['id'];
$sql = "select * from tb_pedido where id_pedido=$id_pedido";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL PEDIDO ::: MODIFICAR DATOS</h1>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/pedido/p_edit_pedido.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Codigo</label>
                        <div class="w-full my-4">
                            <input type="text" name="txt_codigo" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" value="<?php echo $id_pedido ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Estado</label>
                        <div class="w-full my-4">
                            <select name="estado" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="carrito" <?php if ($row['estado'] == "carrito") {
                                                            echo "selected";
                                                        } ?>>
                                    En carrito
                                </option>
                                <option value="finalizado" <?php if ($row['estado'] == "finalizado") {
                                                                echo "selected";
                                                            } ?>>
                                    Finalizado y enviado
                                </option>
                                <option value="recibido" <?php if ($row['estado'] == "recibido") {
                                                                echo "selected";
                                                            } ?>>
                                    Entregado y pagado
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Observaciones</label>
                        <div class="w-full my-4">
                            <textarea type="textarea" cols="20" rows="3" class="w-full h-24 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txa_observaciones" placeholder="observaciones" required></textarea>
                        </div>
                    </div>

                    <div class="w-full flex justify-between items-center mt-3 gap-2">
                        <div class="w-1/2 flex justify-center">
                            <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-save mr-2"></i> Guardar Datos</button>
                        </div>
                        <div class="w-1/2 flex justify-center">
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_pedido');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>