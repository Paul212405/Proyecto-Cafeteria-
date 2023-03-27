<?php
include("../../back_end/conexion/conexion.php");
//Los clientes
$sql = "SELECT id_cliente,CONCAT(apellidos,' ',nombres) as nombre FROM tb_cliente";
$result_cliente = $con->query($sql);
//Los productos
$sql = "SELECT * FROM tb_producto";
$result_producto = $con->query($sql);
?>
<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL TESTIMONIO ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../back_end/controladores/p_add_testimonio.php">
            <div class="">
                <label class="">Cliente</label>
                <div class="">
                    <select name="cliente">
                        <?php
                        while ($clientes = $result_cliente->fetch_array()) {
                        ?>
                            <option value="<?php echo $clientes['id_cliente'] ?>">
                                <?php echo $clientes['nombre'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="">
                <label class="">Testimonio</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_testimonio" placeholder="Ingrese testimonio" required>
                </div>
            </div>
            <div class="">
                <label class="">Valoración</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_valoracion" placeholder="Ingrese Valoracion" required>
                </div>
            </div>
            <div class="">
                <label class="">Producto</label>
                <div class="">
                    <select name="producto">
                        <?php
                        while ($productos = $result_producto->fetch_array()) {
                        ?>
                            <option value="<?php echo $productos['id_producto'] ?>">
                                <?php echo $productos['nombre'] ?>
                            </option>
                        <?php
                        }
                        ?>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="">
                    <button type="submit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_testimonio');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>