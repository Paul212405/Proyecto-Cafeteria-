<?php
include("../../back_end/conexion/conexion.php");

$id_cliente = $_GET['id'];
$sql = "select * from tb_cliente where id_cliente=$id_cliente";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);


?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL CLIENTE ::: MODIFICAR DATOS</h1>
        <form  method="POST" action="./../back_end/controladores/cliente/p_edit_cliente.php">
            <div class="">
                <label class="">Codigo</label>
                <div class="">
                    <input type="text" name="txt_codigo" class="form-control"  value="<?php echo $id_cliente ?>">
                </div>
            </div>
            <div class="">
                <label class="">Nombres</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombres" placeholder="Nombres" value="<?php echo $row['nombres']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Apellidos</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_apellidos" placeholder="Apellidos" value="<?php echo $row['apellidos']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Direccion</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_direccion" placeholder="Direccion" value="<?php echo $row['direccion']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Email</label>
                <div class="">
                    <input type="email" class="form-control" name="txt_email" placeholder="Correo electronico" value="<?php echo $row['email']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Celular</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_celular" placeholder="Celular" value="<?php echo $row['celular']; ?>">
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_cliente');e.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>