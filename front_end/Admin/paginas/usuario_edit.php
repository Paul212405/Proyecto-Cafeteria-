<?php
include("../../../back_end/conexion/conexion.php");

$id_usuario = $_GET['id'];
$sql = "select * from tb_usuario where id_usuario=$id_usuario";
$result = mysqli_query($con, $sql);
$row = mysqli_fetch_assoc($result);
/*$nombre = $row['nombre'];
$email = $row['email'];
$fecha_registro = $email['fecha_registro'];
$rol = $row['tipo'];*/

//Modificar datos
/*$sql = $con->prepare("UPDATE cliente SET nomb_cliente = ?, apel_cliente = ?, cel_cliente = ?, email_cliente = ?, dni_cliente = ?, direc_cliente = ?, dist_cliente = ? WHERE id_cliente = ?");
$sql->bind_param(
    "ssssssss",
    $nombres,
    $apellidos,
    $celular,
    $email,
    $dni,
    $direccion,
    $distrito,
    $id_cliente
);
$sql->execute();
$con->close();
if ($sql) {
    //mensale de alerta 
    header("location: edit_cliente.php?cliente=" . $id_cliente . "&resp=OK");
} else {
    //mensale de alerta 
    echo ' <div class="alert alert-danger alert-dismissible fade show"><strong>Error!</strong>   Error: No se Modificaron los datos.<button type="button" class="btn-close" data-bs-dismiss="alert"></button></div>';
}*/

?>

<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL USUARIO ::: MODIFICAR DATOS</h1>
        <form  method="POST" action="./../../back_end/controladores/p_edit_usuario.php">
            <div class="">
                <label class="">Codigo</label>
                <div class="">
                    <input type="text" name="txt_codigo" class="form-control"  value="<?php echo $id_usuario ?>">
                </div>
            </div>
            <div class="">
                <label class="">Nombre</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Email</label>
                <div class="">
                    <input type="email" class="form-control" name="txt_email" placeholder="Correo electronico" value="<?php echo $row['email']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Fecha Registro</label>
                <div class="">
                    <input type="date" class="form-control" name="fecha" value="<?php echo $row['fecha_registro']; ?>">
                </div>
            </div>
            <div class="">
                <label class="">Rol</label>
                <div class="">
                    <select name="tipo" id="">
                        <option value="C" <?php if($row['tipo'] == "C"){echo "selected";} ?>>
                            Cliente
                        </option>
                        <option value="A" <?php if($row['tipo'] == "A"){echo "selected";} ?>>
                            Administrador
                        </option>
                    </select>
                </div>
            </div>
            <div class="">
                <label class="">Estado</label>
                <div class="">
                    <select name="estado" id="">
                        <option value="A" <?php if($row['estado'] == "A"){echo "selected";} ?>>
                            Activo
                        </option>
                        <option value="I" <?php if($row['estado'] == "I"){echo "selected";} ?>>
                            Inactivo
                        </option>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_usuario');e.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>