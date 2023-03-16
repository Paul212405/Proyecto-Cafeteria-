<?php
//Cargamos los datos del actual cliente
include("../../back_end/conexion/conexion.php");
include("../../back_end/conexion/auth.php");
$idusuario = $_SESSION["usuario"];
//
//Consulta para los datos personales del cliente
$sql = "SELECT * FROM tb_cliente 
                WHERE id_usuario = '$idusuario'";
$result = $con->query($sql);
$r = $result->fetch_array();
//Consulta para datos de usuario
$sql = "SELECT * FROM tb_usuario 
                WHERE id_usuario = '$idusuario'";
$result = $con->query($sql);
$u = $result->fetch_array();
?>

<script src="./scritps/validar_form.js"></script>

<p class="text-xl font-bold my-4 text-left">Datos Personales</p>
<form action="./../back_end/controladores/p_actualizar_usuario.php" method="post" onSubmit="validar_contras('<?php echo $u['password'];?>')" >
    <!---->
    <div class="flex justify-between items-center flex-wrap">
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pr-5">
            <label>Nombres</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_nombres" value="<?php echo $r['nombres']; ?>">
        </div>
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pl-5">
            <label>Apellidos</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_apellidos" value="<?php echo $r['apellidos']; ?>">
        </div>
    </div>
    <!---->
    <div class="block py-2">
        <label>Direccion</label>
        <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_direccion" value="<?php echo $r['direccion']; ?>">
    </div>
    <!---->
    <div class="flex justify-between items-center flex-wrap">
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pr-5">
            <label>Celular</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_celular" value="<?php echo $r['celular']; ?>">
        </div>
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pl-5">
            <label>Email</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="email" name="txt_email" value="<?php echo $r['email']; ?>">
        </div>
    </div>
    <!---->
    <p class="text-xl font-bold my-4 text-left">Datos de Usuario</p>
    <!--Formulario para datos de mi usuario-->
    <div class="block py-2">
        <label class=" pr-8">Nombre de Usuario</label>
        <input class="w-full h-12  border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_usuario" value="<?php echo $u['nombre']; ?>">
    </div>
    <div class="block py-2">
        <label class=" pr-8">Contraseña actual</label>
        <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_act_contra" id="contra_actual">
    </div>
    <!---->
    <div class="flex justify-between items-center flex-wrap">
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pr-5">
            <label>Nueva Contraseña</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_nueva_contra" id="contra_nueva">
        </div>
        <div class="block w-full lg:w-2/5 py-2 lg:flex-1 lg:pl-5">
            <label>Confirmar Contraseña</label>
            <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="password" name="txt_con_contra" id="contra_nueva_conf">
        </div>
    </div>
    <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90" type="submit" value="ACTUALIZAR DATOS">
</form>