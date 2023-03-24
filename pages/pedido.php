<?php
include_once("utils/head.php");
?>
<?php
include("components/navigate.php");
?>
<script>
    //Evento que se activa al cargar la pagina
    window.addEventListener('load', function() {
        cargarinterfaz('./components/tabla_pedido.php', 'contenedor_tabla_pedido')
    });
</script>

<body class="bg-[url('../Public/images/negocio/pedido.jpg')] bg-cover">
    <div class="block text-center my-10 text-3xl pt-16 font-bold text-white">
        <h1>DETALLE DEL PEDIDO</h1>
    </div>
    <div class="w-full bg-white py-10 px-5">
        <div id="contenedor_tabla_pedido" class="grid grid-cols-1 lg:grid-cols-3 gap-5 transition-all duration-700">
            
        </div>
    </div>
</body>
<?php include("components/footer.php") ?>