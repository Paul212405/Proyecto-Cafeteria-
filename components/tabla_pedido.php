<?php
include("../back_end/conexion/conexion.php");
include("../back_end/conexion/auth.php");
//Cargamos el pedido actual
$id_usuario = $_SESSION['usuario'];
$sql = "SELECT * FROM tb_cliente WHERE id_usuario = $id_usuario";
$result = $con->query($sql);
$cliente = $result->fetch_array();
$direccion = $cliente['direccion_facturacion'];
$pedido =  $_SESSION['pedido'];
if ($pedido != 0) {
    $sql = "SELECT pe.id_cliente,depe.id_det_pedido,pe.total,po.id_producto, po.nombre,SUM(depe.cantidad) as cantidad,po.precio,SUM(depe.sub_total) as sub_total FROM tb_pedido pe inner join detalle_pedido depe on pe.id_pedido = depe.id_pedido inner join tb_producto po on depe.id_producto = po.id_producto WHERE pe.id_pedido = $pedido GROUP BY po.id_producto,po.nombre";
    $result = $con->query($sql);
    $result2 = $con->query($sql);
    $total = 0;
}
?>
<script src="./scritps/envio_pedido_finalizado.js"></script>
<div class="col-span-1 lg:col-span-2 w-full transition-all duration-700">
    <!--Modelo de tabla hasta cierto punto-->
    <table class="transition-all duration-700 max-sm:hidden w-full border-collapse border-spacing-y-2">
        <thead>
            <tr class="text-lg font-normal">
                <th class="text-left py-3 px-2 border-b-[1px] border-b-black/50">PRODUCTO</th>
                <th class="text-center py-3 px-2 border-b-[1px] border-b-black/50">CANTIDAD</th>
                <th class="text-center py-3 px-2 border-b-[1px] border-b-black/50">PRECIO</th>
                <th class="text-center py-3 px-2 border-b-[1px] border-b-black/50">SUBTOTAL</th>
                <th class="text-center py-3 px-2 border-b-[1px] border-b-black/50"></th>
            </tr>
        </thead>
        <tbody>
            <?php
            while ($carrito = $result->fetch_array()) {
                $total = $carrito['total'];
                $id_cliente = $carrito['id_cliente'];
            ?>
                <tr>
                    <td class="text-sm py-3 px-2 w-1/3 border-b-[1px] border-b-black/50">
                        <div class="flex justify-start gap-3 items-center">
                            <img class="w-16 h-16 rounded-full" src="./Public/images/productos/producto_<?php echo $carrito['id_producto'] ?>.jpg">
                            <div class="block">
                                <p class="font-bold text-lg">
                                    <?php echo $carrito['nombre'] ?>
                                </p>
                                <p>Del mejor que puede existir</p>
                            </div>
                        </div>
                    </td>
                    <td class="w-1/5 text-lg text-center font-medium text-gray-900 border-b-[1px] border-b-black/50">
                        <?php echo $carrito['cantidad'] ?> Uni.
                    </td>
                    <td class="w-1/5 text-lg text-center font-medium text-gray-900 border-b-[1px] border-b-black/50">
                        S/ <?php echo $carrito['precio'] ?>
                    </td>
                    <td class="w-1/5 text-xl text-center font-semibold text-blue-900 border-b-[1px] border-b-black/50">
                        S/ <?php echo $carrito['sub_total'] ?>
                    </td>
                    <td class="text-2xl text-center border-b-[1px] border-b-black/50">
                        <button onclick="eliminar_item_pedido({pedido: <?php echo $pedido ?>,producto:<?php echo $carrito['id_producto'] ?>},'POST', './back_end/controladores/p_eliminar_detalle_pedido.php')">
                            <i class="fas fa-times"></i>
                        </button>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <!--Modelo de tarjeta hasta cierto punto-->
    <div class="block">
        <?php
        while ($carrito = $result2->fetch_array()) {
            $total = $carrito['total'];
        ?>
            <div class="sm:hidden w-full flex justify-start pb-2 gap-3 items-center mb-3 border-b-[1px] border-b-black">
                <img class="w-20 h-20 rounded-full" src="./Public/images/productos/producto_<?php echo $carrito['id_producto'] ?>.jpg">
                <div class="block grow text-lg">
                    <div class="flex justify-between items-center my-2">
                        <p class="font-bold text-right">
                            <?php echo $carrito['nombre'] ?>
                            </br>
                            <span class="text-sm font-normal">De lo mejor que puede haber</span>
                        </p>
                        <button class="text-xl" onclick="eliminar_item_pedido({pedido: <?php echo $pedido ?>,producto:<?php echo $carrito['id_producto'] ?>},'POST', './back_end/controladores/p_eliminar_detalle_pedido.php')">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold">Cantidad:</p>
                        <p>
                            <?php echo $carrito['cantidad'] ?> Uni.
                        </p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold">Precio:</p>
                        <p>S/ <?php echo $carrito['precio'] ?></p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-semibold">Sub Total:</p>
                        <p class="font-bold text-blue-900">
                            S/ <?php echo $carrito['sub_total'] ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</div>
<div class="col-span-1 shadow-2xl w-full px-5 py-7 block">
    <p class="text-xl font-semibold py-2 text-center leading-8 border-b-[1px] border-b-black/80">PROCESAR COMPRA</p>
    <div class="flex justify-between pt-6 text-lg">
        <p class="font-semibold">Direccion de envio:</p>
        <p>
            <?php
            //Buscamos su direccion de facturacion
            echo $direccion;
            ?>
        </p>
    </div>
    <p class="text-lg font-bold pb-6 pt-2 text-right leading-8 text-blue-900 border-b-[1px] border-b-black/80">
        <a href="./cuenta.php">Cambiar Direccion</a>
    </p>
    <div class="flex justify-between pt-6 pb-2 text-lg">
        <p class="font-semibold">Total:</p>
        <p class="text-2xl font-bold text-blue-900">S/ <?php echo $total ?></p>
    </div>
    <a href="./back_end/controladores/p_finalizar_pedido.php" class="w-full text-center">
        <div class="w-full bg-blue-900 hover:bg-blue-700 transition-all duration-1000 font-bold text-lg text-white px-24 py-2 rounded-lg">
            Finalizar Compra
        </div>
    </a>
</div>