<?php
include("../../back_end/conexion/conexion.php");

$id_producto = $_GET['id'];
$sql = "select * from tb_producto where id_producto=$id_producto";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

//Las categorias
$sql = "SELECT * FROM tb_categoria";
//Obtener los usuario que necesitan una cuenta cliente
$resultado = $con->query($sql);
?>
?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL PRODUCTO ::: MODIFICAR DATOS</h1>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/producto/p_edit_producto.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Codigo</label>
                        <div class="w-full my-4">
                            <input type="text" name="txt_codigo" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" value="<?php echo $id_producto ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Nombre</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Descripcion</label>
                        <div class="w-full my-4">
                            <textarea class="w-full h-24 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_descripcion" placeholder="Descripcion" value=""><?php echo $row['descripcion']; ?></textarea>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Precio</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_precio" placeholder="Precio" value="<?php echo $row['precio']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Stock</label>
                        <div class="w-full my-4">
                            <input type="number" min="1" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_stock" placeholder="Stock" value="<?php echo $row['stock']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Estado</label>
                        <div class="w-full my-4">
                            <select name="estado" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="d" <?php if ($row['estado'] == "d") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Disponible
                                </option>
                                <option value="a" <?php if ($row['estado'] == "a") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Agotado
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Categoria</label>
                        <div class="w-full my-4">
                            <select name="categoria" class="w-full h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <?php
                                while ($categorias = $resultado->fetch_array()) {
                                ?>
                                    <option value="<?php echo $categorias['id_categoria'] ?>" <?php if ($row['id_categoria'] == $categorias['id_categoria']) {
                                                                                                    echo "selected";
                                                                                                } ?> class="text-lg font-light">
                                        <?php echo $categorias['nombre'] ?>
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
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_producto');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm lg:text-lg font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>