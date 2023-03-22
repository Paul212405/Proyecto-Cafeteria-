<?php
include("../../back_end/conexion/conexion.php");
//Aqui se realiza la consulta y filtrado de productos
include("../../back_end/controladores/p_productos.php");
?>
<!--Llamamos al script que envia los datos al php del detalle del pedido-->
<script src="./scritps/envio_form_pedido.js"></script>
<div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
    <!--Una tarjeta de producto-->
    <?php
    while ($productos = $result->fetch_array()) {
    ?>
        <div class=" block col-span-1 bg-white rounded-b-lg">
            <div class="bg-[url('./../Public/images/productos/producto_<?php echo $productos['id_producto']?>.jpg')] block w-full h-80 bg-cover"></div>
            <div class="block p-6 ">
                <p class="text-2xl font-bold text-center my-3">
                    <button onclick="quitar_scroll_y(<?php echo $productos['id_producto']?>,<?php echo $c ?>,<?php echo $o ?>)">
                        <?php echo $productos['nombre']; ?>
                    </button></p>
                <div class="flex justify-around items-center">
                    <p>Sin estrellas</p>
                    <p>(
                        <?php
                        $id = $productos['id_producto'];
                        $sql = "SELECT COUNT(*) as total FROM tb_testimonio WHERE id_producto=$id";
                        $resultado = $con->query($sql);
                        $valoracion = $resultado->fetch_array();
                        if ($valoracion != null) {
                            echo $valoracion['total'];
                        } else {
                            echo 0;
                        }
                        ?>
                        )</p>
                </div>
                <p class="text-3xl font-bold text-start text-blue-800 my-3">
                    S/. <?php echo $productos['precio']; ?></p>
                <form autocomplete="off" id="form<?php echo $productos['id_producto'] ?>">
                <div class="flex flex-wrap justify-between items-center mx-auto">
                    <!--Creamos campos ocultos de los datos a enviar-->
                    <input type="hidden" name="id_producto" value="<?php echo $productos['id_producto']?>">
                    <input type="hidden" name="precio" value="<?php echo $productos['precio']?>"> 
                    <div class="h-12 w-32">
                        <div class="flex h-10 w-32 bg-transparent mt-1">
                            <input id="contador" type="number" class="outline-none focus:outline-none text-center w-full bg-gray-100 font-semibold text-md hover:text-black text-gray-700 rounded-sm" name="txt_cantidad" value="0"></input>
                        </div>
                    </div>
                    <input type="submit" class="bg-blue-900 text-white font-semibold hover:bg-blue-900/80 transition-all duration-700 cursor-pointer w-32 h-12 px-4 py-2 rounded-lg" value="Añadir">
                </div>
                </form>
            </div>
        </div>
    <?php
    }
    ?>
    <!---->
</div>
<!--Paginacion-->
<?php
//Obtener la cantidad de registros	
$filas = $con->query($sqlpag);
$r = $filas->fetch_array();
$total = $r["total"];
$cantidad = 5;
//obteniendo la cantidad paginas
//ceil permite redondear al entero superior y floor al entero inferior
$numpaginas = ceil($total / $cantidad);
?>
<div class="w-full mx-auto p-3 bg-black">
    <ul class="flex justify-center">
        <li>
            <!--Este boton nos regresa una pagina atras siempre y cuando ya hayamos selecionado una pagina-->
            <button onclick="cargarinterfaz('./components/lista_2x2.php?c=<?php echo $c ?>&o=<?php echo $o ?>&limite=<?php if(($limi - 5) < 0){echo 0;}else{echo $limi - 5;}?>', 'contenedor_productos')" class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#!">Previo</button>
        </li>
        <?php
        //Aqui va generar la paginacion y mediante nuestro metodo para llamar componentes recargamos la lista  en la que nos encontramos y enviamos los datos de como la categoria y el orden en que se encuentran actualmente
        for ($i = 0; $i < $numpaginas; $i++) {
            $lim = $i * $cantidad;
        ?>
            <li>
                <button onclick="cargarinterfaz('./components/lista_2x2.php?c=<?php echo $c?>&o=<?php echo $o?>&limite=<?php echo $lim?>','contenedor_productos')" 
                class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"><?php echo ($i + 1) ?></button>
            </li>
            <!---->
        <?php
        }
        ?>
        <li>
            <!--Este boton envia una pagina adelante siempre y cuando ya hayamos selecionado una pagina-->
            <button onclick="cargarinterfaz('./components/lista_2x2.php?c=<?php echo $c ?>&o=<?php echo $o ?>&limite=<?php if(($limi + 5) > $total){echo ceil($total/5)*5;}else{echo $limi + 5;}?>', 'contenedor_productos')" class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white">Siguiente</button>
        </li>
    </ul>
</div>