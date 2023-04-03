<?php
include("../back_end/conexion/conexion.php");
//Recibimos los datos
$id_producto = $_GET['p'];
$o = $_GET['o'];
$c = $_GET['c'];
//Buscamos los datos del producto
$sql = "SELECT * FROM tb_producto WHERE id_producto=$id_producto";
$result = $con->query($sql);
$producto = $result->fetch_array();
//Buscamos sus datos de valoracion
//Buscamos sus datos de valoracion
$sql = "SELECT ROUND(AVG(valoracion)) as media,COUNT(id_testimonio) as total FROM tb_testimonio WHERE id_producto=$id_producto";
$resultado = $con->query($sql);
$valoracion = $resultado->fetch_array();
$media_valoraciones = 0;
$total_testi = 0;
if ($valoracion != null) {
$media_valoraciones = $valoracion['media'];
$total_testi = $valoracion['total'];
}
//Para el enlace de categoria
$sql = "SELECT count(po.id_producto) as cantidad,ca.nombre,ca.id_categoria FROM tb_categoria ca INNER JOIN tb_producto po on ca.id_categoria=po.id_categoria WHERE po.id_producto=$id_producto group by ca.nombre,ca.id_categoria";
$result = $con->query($sql);
$categoria = $result->fetch_array();
?>
<style>
    /*Valoracion pero por cada persona*/
    .rating label.activado {
        color: gold;
    }
</style>
<!--Para llamar al script de envio de un pedido-->
<script src="./scritps/envio_pedido_modal.js"></script>
<!--Llamar al jquery que llama las acciones de enviar formularios guardar testimonio-->
<script src="./scritps/envio_forms_testimio.js"></script>
<div id="producto-in" class="bg-black/70 z-10 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0">
</div>
<!--El transition all duration-700 sirve para que las animaciones o eventos cargen con mejor efecto-->
<div id="producto-des" class="bg-white h-full z-10 w-full fixed top-0 right-0 left-0 sm:mx-auto sm:mt-7 sm:w-[75%] overflow-y-auto overflow-x-hidden rounded-lg px-2 lg:px-5 py-2 transition-all duration-700">
    <!--Datos del producto-->
    <div class="block">
        <div class="flex items-center justify-end w-full p-1 font-bold">
            <button onclick="desactivar_producto(<?php echo $c?>,<?php echo $o; ?>)">
                <i class="fas fa-times fa-lg text-black"></i>
            </button>
        </div>
        <div class="flex items-start flex-wrap w-full my-4 px-4">
            <div class="w-full lg:flex-1 lg:pr-10">
                <img src="./Public/images/productos/producto_<?php echo $id_producto?>.jpg" class="block w-full h-80 object-cover">
            </div>
            <div class="lg:flex-1 block">
                <!--Sub menu-->
                <div class="flex justify-center items-center gap-1 text-center text-sm lg:text-lg text-gray-700 transition-all duration-700 font-semibold mb-3 mt-5 lg:mt-0">
                    <a href="./index.php" class="hover:text-black ">Inicio</a> |
                    <a href="?c=<?php echo $categoria['nombre']; ?>&n=<?php echo $categoria['cantidad']; ?>&i=<?php echo $categoria['id_categoria']; ?>" class="hover:text-black ">
                        <?php echo $categoria['nombre']; ?>
                    </a> |
                    <p class="text-black"><?php echo $producto['nombre'] ?></p>
                </div>
                <!--Datos generales-->
                <p class="text-left text-4xl mb-4 font-semibold">
                    <?php echo $producto['nombre'] ?>
                </p>
                <div class="flex justify-start items-center mb-4 text-lg">
                    <p>
                        <!--Menu de estrellas pero para mostrar la valoracion promedio-->
                    <div class="flex justify-start gap-2 items-center mr-3">
                        <div class="pb-1">
                            <?php
                            //Va imprimir la cantidad de estrellas correspondientes
                            if($media_valoraciones>0){
                            for ($i = 0; $i < $media_valoraciones; $i++) {
                            ?>
                                <label class="text-2xl mr-2 text-yellow-500">&#9733;</label>
                            <?php
                            }
                            }else{
                                echo "Sin reseñas";
                            }
                            ?>
                        </div>
                    </div>
                    </p>
                    <p class="mb-1">(
                        <?php
                        echo $total_testi;
                        ?>
                        )</p>
                </div>
                <p class="text-5xl font-bold text-start text-blue-800 my-4">
                    <?php echo $producto['precio'] ?></p>
                <p class="text-left text-xl mb-4 font-semibold">
                    <?php if($producto['stock']<0){echo 0;}else{echo $producto['stock'];} ?> unidades
                </p>
                <form id="form_modal">
                <div class="flex justify-start items-center gap-5 mx-auto">
                    <!--Creamos campos ocultos de los datos a enviar-->
                    <input type="hidden" name="id_producto" value="<?php echo $id_producto?>">
                    <input type="hidden" name="precio" value="<?php echo  $producto['precio']?>"> 
                    <div class="h-12 w-24">
                        <div class="flex h-10 w-24 bg-transparent mt-1">
                            <input id="contador" type="number" min="0" max="<?php echo $producto['stock']?>" class="outline-none focus:outline-none text-center w-full bg-gray-100 font-semibold text-md hover:text-black text-gray-700 rounded-sm" name="txt_cantidad" value="0">
                        </div>
                    </div>
                    <input type="submit" class="bg-blue-900 cursor-pointer text-white w-32 h-12 px-4 py-2 rounded-lg" value="Añadir">
                </div>
                </form>
            </div>
        </div>
        <!--Menu de valoraciones y descripcion-->
        <div class="w-full mx-auto">
            <ul class="mb-5 flex justify-center items-center gap-3" role="tablist" data-te-nav-ref>
                <li role="presentation">
                    <a href="#tabs-desc" class="my-2 block border-x-0 border-t-0 border-b-2 border-transparent px-7 pt-4 pb-3.5 text-sm font-medium uppercase text-black data-[te-nav-active]:border-blue-900" data-te-toggle="pill" data-te-target="#tabs-desc" data-te-nav-active role="desc" aria-controls="tabs-desc" aria-selected="true">Descripcion</a>
                </li>
                <li role="presentation">
                    <a href="#tabs-val" class="my-2 block border-x-0 border-t-0 border-b-2 px-7 pt-4 pb-3.5 text-sm font-medium uppercase text-black data-[te-nav-active]:border-blue-900" data-te-toggle="pill" data-te-target="#tabs-val" role="val" aria-controls="tabs-val" aria-selected="false">Valoraciones</a>
                </li>
            </ul>
            <div class="px-5 mb-5">
                <div class="hidden opacity-100 transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-desc" role="tabpanel" aria-labelledby="tabs-desc-tab" data-te-tab-active>
                    <?php echo $producto['descripcion'] ?>
                </div>
                <div class="hidden transition-opacity duration-150 ease-linear data-[te-tab-active]:block" id="tabs-val" role="tabpanel" aria-labelledby="tabs-val-tab">
                    <div class="block w-full sm:w-2/3 mx-auto mb-10">
                        <p class="text-lg font-bold my-4 text-left">¿Que te parecio este producto?</p>
                        <!--Formulario de envio de opinion-->
                        <form id="formulario_testimonio">
                            <div class="block py-2 mb-4">
                                <!--Aca se juega con la valoracion que sera enviada al servidor con el metodo setRating-->
                                <div class="flex items-center">
                                    <p class="text-sm mr-2">Valoracion :</p>
                                    <div class="rating pb-1">
                                        <input type="radio" name="rating" value="1" id="rating-1" class="hidden" />
                                        <label for="rating-1" class="text-2xl mr-2 cursor-pointer" onclick="setRating(1)">&#9733;</label>
                                        <input type="radio" name="rating" value="2" id="rating-2" class="hidden" />
                                        <label for="rating-2" class="text-2xl mr-2 cursor-pointer" onclick="setRating(2)">&#9733;</label>
                                        <input type="radio" name="rating" value="3" id="rating-3" class="hidden" />
                                        <label for="rating-3" class="text-2xl mr-2 cursor-pointer" onclick="setRating(3)">&#9733;</label>
                                        <input type="radio" name="rating" value="4" id="rating-4" class="hidden" />
                                        <label for="rating-4" class="text-2xl mr-2 cursor-pointer" onclick="setRating(4)">&#9733;</label>
                                        <input type="radio" name="rating" value="5" id="rating-5" class="hidden" />
                                        <label for="rating-5" class="text-2xl cursor-pointer" onclick="setRating(5)">&#9733;</label>
                                    </div>
                                </div>
                            </div>
                            <div class="block py-2 text-sm">
                                <label class=" pr-8">Tu Opinion :</label>
                                <textarea class="w-full h-20 overflow-y-hidden border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txa_testimonio" required></textarea>
                            </div>
                            <input type="hidden" name="id_producto" value="<?php echo $id_producto?>">
                            <input type="hidden" name="c" value="<?php echo $c?>">
                            <input type="hidden" name="o" value="<?php echo $o?>">
                            <input class="w-48 mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90 cursor-pointer" type="submit" value="ENVIAR OPINION">
                        </form>
                    </div>
                    <!--Tarjetas de opinion de cada cliente-->
                    <?php
                    //Buscamos los testimonios de cada cliente
                    //Antes pregunta si hay 
                    if ($total_testi > 0) {
                        $sql = "SELECT tes.*,cl.apellidos,cl.nombres FROM tb_testimonio tes INNER JOIN tb_cliente cl on tes.id_cliente=cl.id_cliente WHERE tes.id_producto=$id_producto";
                        $result = $con->query($sql);
                        while ($testimonios = $result->fetch_array()) {
                    ?>
                            <div class="block w-full mx-auto lg:w-3/4 mb-10 border-b-4 border-blue-500 shadow-lg p-4">
                                <div class="flex justify-between items-center mb-4">
                                    <div class="block">
                                        <p class="text-xl">
                                            <?php echo $testimonios['apellidos'] . " " . $testimonios['nombres'] ?>
                                        </p>
                                        <div class="flex justify-start gap-2 items-center mr-3">
                                            <div class="pb-1">
                                                <?php
                                                //Va imprimir la cantidad de estrellas correspondientes
                                                for ($i = 0; $i < $testimonios['valoracion']; $i++) {
                                                ?>
                                                    <label class="text-2xl mr-2 text-yellow-500">&#9733;</label>
                                                <?php
                                                }
                                                ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-sm font-semibold">
                                        <p>
                                            <?php echo $testimonios['fecha_registro'] ?>
                                        </p>
                                    </div>
                                </div>
                                <p class="font-serif">
                                    <?php echo $testimonios['testimonio'] ?>
                                </p>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>

    </div>
</div>