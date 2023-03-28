<?php
include("../../back_end/conexion/conexion.php");
include("../../back_end/conexion/auth.php");
//Generando la consulta para traer los datos
$sql = "SELECT * FROM tb_usuario";
//Obtener la cantidad de usuarios
$sqlpag = "select count(*) as total from tb_usuario";
//Para la paginacion
if (isset($_GET['limite'])) {
    $limi = $_GET['limite'];
    $sql = $sql . " limit $limi,5";
} else {
    $sql = $sql . " limit 0,5";
}
$result = $con->query($sql);
?>
<script src="./js/interfaz_admin.js"></script>
<div class="block ">
    <div class="lg:ml-72 bg-slate-50 h-16 shadow-2xl mb-4 flex justify-between items-center pl-4">
        <div class="flex justify-start items-center gap-4">
            <h1 class="transition-all duration-700 text-left text-xl sm:text-3xl lg:text-4xl font-bold text-red-800">USUARIO</h1>
            <div class="transition-all duration-700 text-xs sm:text-sm lg:text-lg font-bold flex justify-center gap-2 items-end">
                <p>Mantenimiento / </p>
                <p>Usuario /</p>
                <p>Datos </p>
            </div>
        </div>
        <div class="h-full bg-purple-900 text-center flex justify-center items-center p-4 text-xs sm:text-sm lg:text-lg text-white font-bold">
            <div><i class="fas fa-user fa-lg mr-3"></i></div>
            <p><?php echo $_SESSION['nombre_us']?></p>
        </div>
    </div>
    <div class="max-lg:mt-10 lg:mr-14 lg:ml-80 sm:mx-10 transition-all duration-1000">
        <div class="text-right my-4">
        <button onclick="cargarcomponente('./paginas/usuario_add.php','contenedor_usuario')" class="bg-green-500 hover:bg-green-700 text-white font-bold py-1 px-2 border border-green-500 rounded">
        <i class="fas fa-plus fa-sm"></i> Añadir Usuario
        </button>
        </div>
        <table class="min-w-full border-collapse block md:table text-sm">
            <thead class="block md:table-header-group">
                <tr class="border border-grey-500 md:border-none block md:table-row absolute -top-full md:top-auto -left-full md:left-auto  md:relative z-0">
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Nombre</th>
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Email</th>
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Fecha Registro</th>
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Rol</th>
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Estado</th>
                    <th class="bg-black p-2 text-white font-bold md:border md:border-grey-500 text-center block md:table-cell">Operaciones</th>
                </tr>
            </thead>
            <tbody class="block md:table-row-group">
                <?php
                while ($usuarios = $result->fetch_array()) {
                ?>
                    <tr class="bg-gray-300 border border-grey-500 md:border-none block md:table-row">
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Nombre</span>
                        <?php echo $usuarios['nombre']?>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Email</span>
                        <?php echo $usuarios['email']?>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Fecha Registro</span>
                        <?php echo $usuarios['fecha_registro']?>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Rol</span>
                        <?php if($usuarios['tipo'] == "C"){echo "Cliente";}else{echo "Administrador";}?>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell"><span class="inline-block w-1/3 md:hidden font-bold">Estado</span>
                        <?php if($usuarios['estado'] == "A"){echo "Activo";}else{echo "Inactivo";}?>
                        </td>
                        <td class="p-2 md:border md:border-grey-500 text-left block md:table-cell">
                            <span class="inline-block w-1/3 md:hidden font-bold">Operaciones</span>
                            <button onclick="cargarcomponente('./paginas/usuario_edit.php?id=<?php echo $usuarios['id_usuario']?>','contenedor_usuario')" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-1 px-2 border border-blue-500 rounded">
                                <i class="fas fa-edit fa-lg"></i></button>
                            <a href="./../back_end/controladores/usuario/p_delete_usuario.php?id=<?php echo $usuarios['id_usuario']?>" class="bg-red-500 hover:bg-red-700 text-white font-bold py-1 px-2 border border-red-500 rounded">
                                <i class="fas fa-trash fa-lg"></i>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>
    
</div>
<!--Paginacion-->
<?php
//Obtener la cantidad de registros	
$filas = $con->query($sqlpag);
$r = $filas->fetch_array();
$total = $r["total"];
$cantidad = 5;
//obteniendo la cantidad paginas
//ceil permite redondear al entero superior y floor al entero inferior
$numpaginas = ceil($total / $cantidad);
?>
<div class="mx-auto p-3 bg-black lg:mr-14 lg:ml-80 sm:mx-10 transition-all duration-1000">
    <ul class="flex justify-center ">
        <li>
            <!--Este boton nos regresa una pagina atras siempre y cuando ya hayamos selecionado una pagina-->
            <button onclick="cargarcomponente('./paginas/usuario.php?limite=<?php if(($limi - 5) < 0){echo 0;}else{echo $limi - 5;}?>', 'contenedor_admin')" class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white" href="#!">Previo</button>
        </li>
        <?php
        //Aqui va generar la paginacion y mediante nuestro metodo para llamar componentes recargamos la lista  en la que nos encontramos y enviamos los datos de como la categoria y el orden en que se encuentran actualmente
        for ($i = 0; $i < $numpaginas; $i++) {
            $lim = $i * $cantidad;
        ?>
            <li>
                <button onclick="cargarcomponente('./paginas/usuario.php?limite=<?php echo $lim?>','contenedor_admin')" 
                class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white"><?php echo ($i + 1) ?></button>
            </li>
            <!---->
        <?php
        }
        ?>
        <li>
            <!--Este boton envia una pagina adelante siempre y cuando ya hayamos selecionado una pagina-->
            <button onclick="cargarcomponente('./paginas/usuario.php?limite=<?php if(($limi + 5) > $total){echo ceil($total/5)*5;}else{echo $limi + 5;}?>', 'contenedor_admin')" class="rounded bg-transparent py-1.5 px-3 text-sm text-neutral-600 transition-all duration-300 hover:bg-neutral-100 dark:text-white dark:hover:bg-neutral-700 dark:hover:text-white">Siguiente</button>
        </li>
    </ul>
</div>
<div class="my-10" id="contenedor_usuario">

</div>
<script src="./js/interfaz_admin.js"></script>