<?php
//Incluye la variable auth por si ya se logeo un usuario
include_once("utils/head.php");
include_once("utils/auth.php");
if (isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] == "A") {
        header("location: Admin/principal.php");
    }
}
?>

<body class="bg-black overflow-x-hidden">
    <!--Div creado para posicionar los elementos en altura Z-->
    <div class="relative">
        <?php include("components/navigate.php") ?>
        <?php include_once("components/slider_prin.php") ?>
    </div>
    <div>
        <!--Borde superior de la seccion-->
        <svg xmlns="http://www.w3.org/2000/svg" class="absolute top-[93%] sm:top-[90%] md:top-[85%] lg:top-[75%] " viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,106.7C640,139,800,213,960,218.7C1120,224,1280,160,1360,128L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
            </path>
        </svg>
        <section class="w-full h-auto bg-white border-t-2 border-black bg-radial-gr">
            <div class="flex justify-center mx-auto mt-4 items-centers">
                <div class="sm:pt-24 pt-12 pb-6">
                    <div class="block text-center w-96">
                        <p class="text-xl text-blue-800 leading-10">¿Que estas buscando?</p>
                        <p class="text-3xl text-red-700 leading-10">Ven y descubre todo lo que te ofrecemos!</p>
                        <p class="text-lg text-black leading-10">Todos nuestros productos son elaborados con mucha delicadeza y pasion pensando siempre en usted</p>
                        <a href="" class="items-center"><button class="w-72 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90">Ver productos </button></a>
                    </div>
                </div>
            </div></br>
            <div class="container mx-auto">
                <div class="flex flex-row justify-around items-center">
                    <div class="basis-1/4 sm:basis-1/3 w-full h-0.5 border-black/10 border"></div>
                    <div class="basis-1/2 sm:basis-1/4 text-center text-lg">
                        <p class="font-mono">Nuestros Productos</p>
                    </div>
                    <div class="basis-1/4 sm:basis-1/3 w-full h-0.5 border-black/10 border"></div>
                </div>
            </div>
        </section>
        <!--Borde inferior de la seccion-->
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,106.7C640,139,800,213,960,218.7C1120,224,1280,160,1360,128L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>
    </div>
    <!--Borde superior de la seccion-->
    <svg xmlns="http://www.w3.org/2000/svg" class="" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,106.7C640,139,800,213,960,218.7C1120,224,1280,160,1360,128L1440,96L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
        </path>
    </svg>
    <!--Borde inferior de la seccion-->
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
        <path fill="#ffffff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,106.7C640,139,800,213,960,218.7C1120,224,1280,160,1360,128L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
        </path>
    </svg>

</body>
<?php include("components/footer.php") ?>