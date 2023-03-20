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
?>

<p class="text-xl font-bold my-4 text-left">Direccion de Facturacion</p>
<form action="./../back_end/controladores/p_actualizar_facturacion.php" method="post" >
    <!---->
    <div class="block py-2">
        <label>Direccion</label>
        <input class="w-full h-12 border-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_direccion" value="<?php echo $r['direccion_facturacion']; ?>" required>
    </div>
    <!---->
    <input class="w-auto px-5 mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90 cursor-pointer" type="submit" value="ACTUALIZAR DIRECCION FACTURACION">
</form>