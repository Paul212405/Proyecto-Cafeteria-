<?php
include("../back_end/conexion/conexion.php");
include("../back_end/conexion/auth.php");
$total = "0.00";
$productos = 0;
if (isset($_SESSION['pedido'])) {
    $pedido =  $_SESSION['pedido'];
    if ($pedido != 0) {
        $sql = "SELECT COUNT(*) as productos,pe.total FROM tb_pedido pe, (SELECT COUNT(*) as productos FROM tb_pedido pe INNER JOIN detalle_pedido de on de.id_pedido = pe.id_pedido WHERE pe.id_pedido = $pedido GROUP BY de.id_producto) as productos WHERE id_pedido = $pedido";
        $result = $con->query($sql);
        $carrito = $result->fetch_array();
        $total = $carrito['total'];
        $productos = $carrito['productos'];
    }
}
?>
<button onclick="
<?php if (isset($_SESSION["usuario"]) && $_SESSION['pedido']!=0) {
    echo "cargarinterfaz('./components/carrito.php','contenedor_carrito')";
} else {
    echo "";
} ?>" class="grid grid-cols-2 grid-rows-2 font-bold text-sm">
    <div class="col-span-1 pt-1 row-span-2 flex justify-center items-center">
        <i class="fas fa-shopping-cart fa-2x m-auto text-gray-400"></i>
    </div>
    <div class="col-span-1 text-red-900 text-sm">
        <span>S/ <?php echo $total ?></span>
    </div>
    <div class="col-span-1 text-xs text-gray-900">
        <span><?php echo $productos ?> Productos</span>
    </div>
</button>
