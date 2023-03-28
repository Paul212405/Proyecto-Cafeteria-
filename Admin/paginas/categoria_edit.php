<?php
include("../../back_end/conexion/conexion.php");

$id_categoria = $_GET['id'];
$sql = "select * from tb_categoria where id_categoria=$id_categoria";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);

?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL USUARIO ::: MODIFICAR DATOS</h1>
        <form  method="POST" action="./../back_end/controladores/categoria/p_edit_categoria.php">
            <div class="">
                <label class="">Codigo</label>
                <div class="">
                    <input type="text" name="txt_categoria" class="form-control"  value="<?php echo $id_categoria ?>">
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
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_categoria');e.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>