<<<<<<< HEAD
<?php
include("../../back_end/conexion/conexion.php");
include("../../back_end/conexion/auth.php");
//Cargamos el pedido actual
$pedido =  $_SESSION['pedido'];
if($pedido != 0){
    $sql = "SELECT pe.total, po.nombre,depe.cantidad,po.precio,depe.sub_total FROM tb_pedido pe inner join detalle_pedido depe on pe.id_pedido = depe.id_pedido inner join tb_producto po on depe.id_producto = po.id_producto WHERE pe.id_pedido = $pedido";
    $result=$con->query($sql);
    $total = 0;
}

?>
<div id="m-carrito" class=" bg-black/70 z-30 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0"></div>
<div id="b-carrito" class=" bg-white transition-all duration-1000 w-80 z-30 fixed top-0 sm:top-8 right-0 sm:right-12">
=======
<div id="m-carrito" class=" bg-black/70 z-30 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0"></div>
<div id="b-carrito" class=" bg-white w-80 z-30 fixed top-0 sm:top-8 right-0 sm:right-12">
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
    <!--Interfaz de carrito-->
    <div class="block">
        <div class="flex items-center justify-between w-full p-3 font-bold text-lg border-b-2 border-b-black/20">
            <p>CARRITO</p>
            <button onclick="activar_carrito()">
                <i class="fas fa-window-close fa-lg"></i>
            </button>
        </div>
        <div class="block w-full p-3 px-4 text-base border-b-2 overflow-y-auto border-b-black/40 max-h-[400px]">
            <!--Un item del carrito o tarjeta-->
<<<<<<< HEAD
            <?php
                while($carrito = $result->fetch_array()){
                    $total = $carrito['total'];
            ?>
=======
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
            <div class="flex justify-start pb-2 gap-3 items-center mb-3 border-dashed border-b-[1px] border-b-black">
                <img class="w-16 h-16 rounded-full" src="./../Public/images/productos/te_helado.jpg">
                <div class="block grow text-xs">
                    <div class="flex justify-between items-center">
<<<<<<< HEAD
                        <p class="font-bold text-center text-blue-800">
                            <?php echo $carrito['nombre']?>
                        </p>
=======
                        <p class="font-bold text-center text-blue-800">Te Helado</p>
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
                        <button><i class="fas fa-window-close fa-sm"></i></button>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Cantidad:</p>
<<<<<<< HEAD
                        <p>
                            <?php echo $carrito['cantidad']?>
                        </p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Precio:</p>
                        <p>S/ <?php echo $carrito['precio']?></p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Sub Total:</p>
                        <p class="font-bold text-blue-900">
                            S/ <?php echo $carrito['sub_total']?></p>
                    </div>
                </div>
            </div>
            <?php
                }
            ?>
=======
                        <p>5</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Precio:</p>
                        <p>S/ 10.00</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Sub Total:</p>
                        <p class="font-bold text-blue-900">S/ 50.00</p>
                    </div>
                </div>
            </div>
            
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
        </div>
        <div class="block w-full p-3 text-center text-sm leading-6 transition-all duration-300">
            <div class="flex justify-between px-2 items-center mb-2">
                <p class="text-xl font-bold">TOTAL:</p>
<<<<<<< HEAD
                <p class="text-2xl text-blue-900 font-bold">
                    S/. <?php echo $total?></p>
=======
                <p class="text-2xl text-blue-900 font-bold">S/. 200.00</p>
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
            </div>
        </div>
        <div class="flex flex-wrap mx-5 mb-5 text-center">
            <a href="" class="w-full my-1 px-10 py-2 bg-slate-300/70 hover:bg-slate-300/40 text-lg font-bold rounded-lg">Ver Detalle</a>
            <a href="" class="w-full my-1 px-10 py-2 text-white bg-blue-700 hover:bg-blue-800 text-lg font-bold rounded-lg">Finalizar Compra</a>
        </div>
    </div>
</div>