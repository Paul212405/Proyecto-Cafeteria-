<?php
include("../back_end/conexion/conexion.php");
include("../back_end/conexion/auth.php");
$id_usuario = $_SESSION['usuario'];
$sql = "SELECT id_cliente FROM tb_cliente where id_usuario = $id_usuario";
$result = $con->query($sql);
$r = $result->fetch_array();
$id_cliente = $r['id_cliente'];

$sql = "SELECT * FROM tb_pedido WHERE id_cliente = $id_cliente and estado != 'carrito'";
$result = $con->query($sql);
if (mysqli_num_rows($result) > 0) {
?>
    <div class="w-full mx-auto px-5">
        <table class="w-full border-collapse">
            <thead>
                <tr class="text-left">
                    <th class="border-b-[2px] border-b-black/80 pb-2 text-xl font-bold">Nº</th>
                    <th class="border-b-[2px] border-b-black/80 pb-2 text-xl font-bold">Fecha Registro</th>
                    <th class="border-b-[2px] border-b-black/80 pb-2 text-xl font-bold">Total</th>
                    <th class="border-b-[2px] border-b-black/80 pb-2 text-xl font-bold">Estado</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($pedidos = $result->fetch_array()) {
                ?>
                    <tr>
                        <td class="border-b-[1px] border-b-black/30 shadow-lg py-4 px-2 text-lg font-normal">
                            <?php echo sprintf('%05d', $pedidos['id_pedido']) ?>
                        </td>
                        <td class="border-b-[1px] border-b-black/30 shadow-lg py-4 px-2 text-lg font-normal">
                            <?php echo $pedidos['fecha_pedido'] ?>
                        </td>
                        <td class="border-b-[1px] border-b-black/30 shadow-lg py-4 px-2 text-lg font-normal">
                            S/ <?php echo $pedidos['total'] ?>
                        </td>
                        <td class="border-b-[1px] border-b-black/30 shadow-lg py-4 px-2 text-lg font-normal">
                            <?php if ($pedidos['estado'] == "finalizado") {
                                echo "Finalizado y enviado";
                            } else {
                                echo "Entregado";
                            } ?>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
<?php
} else {
    echo "<p>No cuenta con pedidos pendientes</p>";
}
?>