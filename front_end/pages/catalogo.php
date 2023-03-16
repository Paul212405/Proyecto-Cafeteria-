<?php
include_once("utils/head.php");
?>
<?php
include("components/navigate.php");
//Va contar las categorias actuales
$sql = "SELECT count(po.id_producto) as cantidad,ca.nombre,ca.id_categoria FROM tb_categoria ca INNER JOIN tb_producto po on ca.id_categoria=po.id_categoria group by ca.nombre,ca.id_categoria";
$result = $con->query($sql);

//Capturando el dato categoria si llega
if (isset($_GET['c'])) {
    $categoria = $_GET['c'];
}else{
    $categoria="";
}
//Capturando el dato cantidad por categorias
if (isset($_GET['n'])) {
    $n = $_GET['n'];
}else{
    $n="";
}
//Capturando el dato id_categoria
if (isset($_GET['i'])) {
    $i = $_GET['i'];
}else{
    $i=0;
}
//Si es que hay un dato de orden
if (isset($_GET['o'])) {
    $o = $_GET['o'];
}else{
    $o=0;
}
?>
<script src="./scritps/catologo.js"></script>
<!--Llamando a nuestro script que cambia el contenido-->
<script src="./scritps/interfaz_usuario.js"></script>
<script>
    //Evento que se activa al cargar la pagina
    window.addEventListener('load', function() {
        cargarinterfaz('./components/lista_2x2.php?c=<?php if(isset($_GET['i'])){echo $_GET['i'];}else{echo 0;}?>&o=<?php echo $o?>', 'contenedor_productos')
    });
</script>
<div id="contenedor_producto">
                    <!--Aqui mediante javascript se incluira todo la descripcion de un producto-->
</div>
<body class="overflow-y-auto">
    <div class="w-full block bg-white">
        <div class="block text-center my-10 text-3xl pt-16 font-bold">
            <div class="flex justify-center flex-wrap items-center pb-5 mx-5">
                <h1>
                    <?php
                    //Cargara el titulo principal de la pagina
                    if ($categoria != "") {
                        echo $categoria;
                    } else {
                        echo "PRODUCTOS";
                    }
                    ?>
                </h1>
                <p class="pl-2 text-2xl text-black/60">
                    <span class="max-sm:hidden"> - </span>
                    <?php
                    if ($n != "") {
                        echo $n." productos";
                    }
                    ?>
                </p>
            </div>
            <div class="w-full mx-auto">
                <div class="flex justify-between items-center border-b-2 border-black mx-[5%] py-3">
                    <!--Menu para ordenar por nombre y distribucion-->
                    <ul class="text-lg font-normal">
                        <button>
                            <li class="text-start leading-8 hover:text-blue-600 bg-white active:bg-gray-100 pl-5 pr-14" onclick="activar_sub_menu()">Ordenar Por
                            </li>
                        </button>
                        <li>
                            <!--Sub menu para ordenar segun desea el usuario-->
                            <ul class="text-start leading-8 hidden absolute" id="ordenar">
                                <li class="bg-white hover:bg-gray-100 hover:text-blue-600 px-5 cursor-pointer"><a href="?c=<?php echo $categoria;?>&n=<?php echo $n;?>&i=<?php echo $i;?>&o=1">Menor Precio</a></li>
                                <li class="bg-white hover:bg-gray-100 hover:text-blue-600 px-5 cursor-pointer"><a href="?c=<?php echo $categoria;?>&n=<?php echo $n;?>&i=<?php echo $i;?>&o=2">Mayor Precio</a></li>
                                <li class="bg-white hover:bg-gray-100 hover:text-blue-600 px-5 cursor-pointer">Mas Populares</li>
                                <li class="bg-white hover:bg-gray-100 hover:text-blue-600 px-5 cursor-pointer"><a href="?c=<?php echo $categoria;?>&n=<?php echo $n;?>&i=<?php echo $i;?>&o=4">Por agotarse</a></li>
                                <li class="bg-white hover:bg-gray-100 hover:text-blue-600 px-5 cursor-pointer"><a href="?c=<?php echo $categoria;?>&n=<?php echo $n;?>&i=<?php echo $i;?>&o=5">Ultimos Añadidos</a></li>
                            </ul>
                        </li>
                    </ul>
                    <div class="flex justify-between items-center">
                        <!--Sub menu para la distribucion , donde se envian datos como el i = id categoria y o = orden-->
                        <button onclick="cargarinterfaz('./components/lista.php?c=<?php echo $i?>&o=<?php echo $o?>','contenedor_productos')" class="mx-[6px]"><i class="fa fa-bars fa-sm" aria-hidden="true"></i></button>
                        <button onclick="cargarinterfaz('./components/lista_2x2.php?c=<?php echo $i?>&o=<?php echo $o?>','contenedor_productos')" class="mx-[6px]"><i class="fas fa-th-large fa-sm"></i>
                        <button onclick="cargarinterfaz('./components/lista_3x3.php?c=<?php echo $i?>&o=<?php echo $o?>','contenedor_productos')" class="mx-[6px]"><i class="fas fa-th fa-sm"></i>
                        <button onclick="cargarinterfaz('./components/lista_4x4.php?c=<?php echo $i?>&o=<?php echo $o?>','contenedor_productos')" class="mx-[6px]"><img src="./images/lista_4x4.png" class="w-7 h-7"></button>
                    </div>
                </div>
            </div>
        </div>
        <div class="px-5 mx-auto bg-white">
            <div class="flex justify-between items-start flex-wrap px-10 py-2">
                <!--Bloque de seleccion de categorias-->
                <div class="block w-full sm:w-[24%] ">
                    <div class="flex items-center flex-wrap pr-5">
                        <?php
                        while ($r = $result->fetch_array()) {
                        ?>
                            <div class="flex justify-between items-center w-full hover:bg-gray-100 px-5">
                                <a href="?c=<?php echo $r['nombre']; ?>&n=<?php echo $r['cantidad']; ?>&i=<?php echo $r['id_categoria']; ?>" class="text-black text-decoration-none py-2">
                                    <?php echo $r['nombre']; ?>
                                </a>
                                <span>
                                    <?php echo $r['cantidad']; ?>
                                </span>
                            </div>
                        <?php } ?>
                    </div>
                </div>
                <!--Bloque de barra lateral-->
                <div class="hidden sm:block w-0.5 h-96 border-black/10 border"></div>
                <!--Bloque de los productos-->
                <div class="w-full sm:w-[72%] p-4 bg-gray-100" id="contenedor_productos">
                    <!--Aqui mediante javascript se incluiran nuestros productos-->
                </div>
            </div>
</body>
<?php include("components/footer.php") ?>