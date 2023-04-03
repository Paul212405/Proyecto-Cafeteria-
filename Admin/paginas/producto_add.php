<?php
include("../../back_end/conexion/conexion.php");
//Los usuarios
$sql = "SELECT * FROM tb_categoria";
//Obtener los usuario que necesitan una cuenta cliente
$resultado = $con->query($sql);
?>
<section class="block">
    <div class="justify-center lg:ml-72 lg:px-5 px-5">
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-[65%] lg:w-[60%]">
                <div class="bg-black w-full rounded-t-lg py-6 shadow-2xl px-5">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL PRODUCT0 ::: AGREGAR DATOS</h1>
                    <div class="flex justify-center items-center w-full">
                        <img class="w-28 h-28" src="../Public/images/negocio/productos1.png" />
                    </div>
                </div>
                <form class="lg:px-6 px-4 py-5" method="POST" action="./../back_end/controladores/producto/p_add_producto.php" >
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Nombre</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombre" placeholder="Nombre del producto" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Imagen</label>
                        <div class="w-full my-4">
                            <input type="file" name="imagen" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Descripcion</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_descripcion" placeholder="Descripcion del producto" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Precio</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_precio" placeholder="Precio del producto" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Stock</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_stock" placeholder="Stock del producto" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Estado</label>
                        <div class="w-full my-4">
                            <select name="estado" class="w-full sm:w-1/2 h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="d" class="text-lg font-light" selected>
                                    Disponible
                                </option>
                                <option value="a" class="text-lg font-light">
                                    Agotado
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Categoria</label>
                        <div class="w-full my-4">
                            <select name="categoria" class="w-full sm:w-1/2 h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <?php
                                while ($categorias = $resultado->fetch_array()) {
                                ?>
                                    <option value="<?php echo $categorias['id_categoria'] ?>">
                                        <?php echo $categorias['nombre'] ?>
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
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_producto');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-sm font-bold text-white"><i class="fa fa-power-off mr-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>