<!--Obteniendo los datos para contar los productos por categoria-->
<?php
//Va contar las categorias actuales
$sql = "SELECT COUNT(*) as cantidad FROM tb_categoria";
$result = $con->query($sql);
$r = $result->fetch_array();
$categorias = [];
//Voy a recorrer y contar cuanto productos tiene cada categoria y lo almaceno
for ($i = 1; $i <= $r["cantidad"]; $i++) {
    $sql = "SELECT COUNT(*) as cantidad FROM tb_producto WHERE id_categoria=$i";
    $result = $con->query($sql);
    $r = $result->fetch_array();
    $categorias[] = $r["cantidad"];
}
?>

<!--Footer de mayor informacion-->
<footer class=" bg-black/20 mx-auto w-full">
    <div class="bg-[url('../Public/images/negocio/footer.png')]  bg-cover grid grid-rows-3 grid-cols-1 sm:grid-rows-2 sm:grid-cols-2 lg:grid-rows-1 lg:grid-cols-12 justify-between items-center ">
        <!--Direccion y cuentas-->
        <div class="col-span-1 sm:col-span-1 lg:col-span-4 text-white block p-6 h-full">
            <div class="w-full flex justify-center sm:justify-start items-center">
                <img src="./Public/images/negocio/logo.png" class="w-36 h-[138px]">
            </div>
            <p class="my-3">100% Postres ricos y caseros</p>
            <div class="flex justify-start items-start ">
                <i class="fa fa-route fa-lg text-white"></i>
                <p class="mx-2">
                    Direccion: 28 de Julio - Huacho, Huaura - Lima
                </p>
            </div>
            <div class="flex justify-start items-center ">
                <i class="fas fa-phone-alt fa-lg text-white"></i>
                <a href="tel:+51 973348411" class="text-white mx-2 text-decoration-none mb-2 mt-4">
                    +51 973348411
                </a>
            </div>
            <div class="flex justify-start items-center ">
                <i class="fas fa-envelope fa-lg text-white"></i>
                <a href="emirjrmasna@gmail.com" class="text-white text-decoration-none mx-2">
                    emirjrmasna@gmail.com
                </a>
            </div>
            <div class="flex justify-center items-center mt-5">
                <a href="#" class="p-3">
                    <i class="fab fa-whatsapp fa-lg text-white"></i>
                </a>
                <a href="#" class="p-3">
                    <i class="fab fa-instagram fa-lg text-white"></i>
                </a>
                <a href="#" class="p-3">
                    <i class="fab fa-youtube fa-lg text-white"></i>
                </a>
                <a href="#" class="p-3">
                    <i class="fab fa-facebook fa-lg text-white"></i>
                </a>
            </div>
        </div>
        <!--Contacto de la empresa-->
        <div class="col-span-1 sm:col-span-1 lg:col-span-4 text-white p-6 h-full transition-all duration-700 flex justify-start lg:items-start items-center">
            <div class="w-full flex items-center flex-wrap">
                <h4 class="w-full font-bold text-3xl mb-4">La Empresa</h4>
                <a class="text-decoration-none py-2 w-full">
                    ¿Quienes Somos?
                </a>
                <a class="text-decoration-none py-2 w-full">
                    Terminos y Condiciones
                </a>
                <a class="text-decoration-none py-2 w-full">
                    Politica de Envio
                </a>
                <a class="text-decoration-none py-2 w-full">
                    Libro de reclamaciones
                </a>
            </div>
        </div>
        <!--Contador de productos por categoria-->
        <div class="col-span-1 sm:col-span-2 lg:col-span-4 text-white block p-6 h-full mb-2">
            <h4 class="font-bold text-3xl mb-2">Nuestros Productos</h4>
            <div class="flex items-center flex-wrap pr-5">
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Cafes y Bebidas Calientes
                    </a>
                    <span>
                        <?php echo $categorias[0]; ?>
                    </span>
                </div>
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Pasteleria
                    </a>
                    <span>
                        <?php echo $categorias[1]; ?>
                    </span>
                </div>
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Platos Salados
                    </a>
                    <span>
                        <?php echo $categorias[2]; ?>
                    </span>
                </div>
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Postres
                    </a>
                    <span>
                        <?php echo $categorias[3]; ?>
                    </span>
                </div>
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Jugos
                    </a>
                    <span>
                        <?php echo $categorias[4]; ?>
                    </span>
                </div>
                <div class="flex justify-between items-center w-full">
                    <a class="text-white text-decoration-none py-2">
                        Especiales
                    </a>
                    <span>
                        <?php echo $categorias[5]; ?>
                    </span>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer mas inferior-->
<footer class=" bg-black mx-auto border-t-2 border-t-white">
    <div class="flex items-center justify-center">
        <div class="p-4">
            <p class="text-center text-gray-400 hover:text-white">
                &copy; 2023 Desarrollado por Paul y Camila
                💜
            </p>
        </div>
    </div>
</footer>