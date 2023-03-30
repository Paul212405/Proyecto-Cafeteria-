<?php
include("../../back_end/conexion/conexion.php");

$id_testimonio = $_GET['id'];
$sql = "select * from tb_testimonio where id_testimonio=$id_testimonio";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

//Los productos
$sql = "SELECT * FROM tb_producto";
$result_producto = $con->query($sql);
?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL TESTIMONIO ::: MODIFICAR DATOS</h1>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/testimonio/p_edit_testimonio.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Codigo</label>
                        <div class="w-full my-4">
                            <input type="text" name="txt_codigo" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" value="<?php echo $id_testimonio ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Testimonio</label>
                        <div class="w-full my-4">
                            <input type="text" name="txt_testimonio" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" placeholder="Testimonio" value="<?php echo $row['testimonio']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Valoración</label>
                        <div class="w-full my-4">
                            <input type="number" min="1" max="5" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_valoracion" placeholder="Valoracion" value="<?php echo $row['valoracion']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Producto</label>
                        <div class="w-full my-4">
                            <select name="producto" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <?php
                                while ($productos = $result_producto->fetch_array()) {
                                ?>
                                    <option value="<?php echo $productos['id_producto'] ?>" <?php if ($row['id_producto'] == $productos['id_producto']) {echo "selected";} ?> class="text-lg font-light">
                                        <?php echo $productos['nombre'] ?>
                                    </option>
                                <?php
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center mt-3 gap-2">
                        <div class="w-1/2 flex justify-center">
                            <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-save mr-2"></i> Guardar Datos</button>
                        </div>
                        <div class="w-1/2 flex justify-center">
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_testimonio');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>