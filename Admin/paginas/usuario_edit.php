<?php
include("../../back_end/conexion/conexion.php");

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
        <div class="flex justify-center items-center mb-4">
            <div class="bg-white rounded-lg shadow-xl grow sm:grow-0 sm:w-2/3">
                <div class="bg-blue-900 w-full rounded-t-lg py-6 shadow-2xl">
                    <h1 class="text-center font-semibold text-lg lg:text-xl pb-2 text-white/90">DATOS DEL USUARIO ::: EDITAR DATOS</h1>
                </div>
                <form class="px-4 py-5" method="POST" action="./../back_end/controladores/p_edit_usuario.php">
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Codigo</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_codigo" value="<?php echo $id_usuario ?>" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Nombre</label>
                        <div class="w-full my-4">
                            <input type="text" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_nombre" placeholder="Nombre" value="<?php echo $row['nombre']; ?>" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Email</label>
                        <div class="w-full my-4">
                            <input type="email" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="txt_email" placeholder="Correo electronico" value="<?php echo $row['email']; ?>" required>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Fecha Registro</label>
                        <div class="w-full my-4">
                            <input type="date" class="w-full h-8 p-5 font-light border-2 border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500" name="fecha" value="<?php echo $row['fecha_registro']; ?>">
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Rol</label>
                        <div class="w-full my-4">
                            <select name="tipo" id="" class="w-full sm:w-1/2 h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="C" <?php if ($row['tipo'] == "C") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Cliente
                                </option>
                                <option value="A" <?php if ($row['tipo'] == "A") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Administrador
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full block">
                        <label class="text-lg font-semibold pb-4">Estado</label>
                        <div class="w-full my-4">
                            <select name="estado" id="" class="w-full sm:w-1/2 h-12 px-5 py-3 font-light border-2 text-black border-black/10 rounded-lg focus:border-black/80 focus:outline-none transition-all duration-500 cursor-pointer">
                                <option value="A" <?php if ($row['estado'] == "A") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Activo
                                </option>
                                <option value="I" <?php if ($row['estado'] == "I") {
                                                        echo "selected";
                                                    } ?> class="text-lg font-light">
                                    Inactivo
                                </option>
                            </select>
                        </div>
                    </div>
                    <div class="w-full flex justify-between items-center mt-3 gap-3">
                        <div class="w-1/2 flex justify-center">
                            <button type="submit" name="edit" class="w-full px-6 rounded-lg bg-green-800 py-3 text-lg font-bold text-white"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                        </div>
                        <div class="w-1/2 flex justify-center">
                            <button onclick="cargarcomponente('./paginas/close.php','contenedor_usuario');event.preventDefault();" class="w-full px-6 rounded-lg bg-red-700 py-3 text-lg font-bold text-white"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>