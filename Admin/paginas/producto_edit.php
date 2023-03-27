<?php
include("../../back_end/conexion/conexion.php");

$id_producto = $_GET['id'];
$sql = "select * from tb_producto where id_producto=$id_producto";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL PRODUCTO ::: MODIFICAR DATOS</h1>
        <form  method="POST" action="./../back_end/controladores/p_edit_producto.php">
            <div class="">
                <label class="">Codigo</label>
                <div class="">
                    <input type="text" name="txt_codigo" class="form-control"  value="<?php echo $id_producto ?>">
                </div>
            </div>
            <div class="">
                <label class="">Nombre</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Descripcion</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_descripcion" placeholder="Descripcion" value="<?php echo $row['descripcion']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Precio</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_precio" placeholder="Precio" value="<?php echo $row['precio']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Stock</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_stock" placeholder="Stock" value="<?php echo $row['stock']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Estado</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_estado" placeholder="Estado" value="<?php echo $row['estado']; ?>">
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_producto');e.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>