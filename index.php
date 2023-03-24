<?php
//Incluye la variable auth por si ya se logeo un usuario
include_once("utils/head.php");
include_once("utils/auth.php");
if (isset($_SESSION['tipo'])) {
    if ($_SESSION['tipo'] == "A") {
        header("location: Admin/principal.php");
    }
}
//Cargamos algunos testimonios
$sql = "SELECT te.testimonio,MAX(te.valoracion) as valoracion ,CONCAT(cli.apellidos,' ',cli.nombres) as nombre FROM tb_testimonio te INNER JOIN tb_cliente cli ON cli.id_cliente = te.id_cliente GROUP BY nombre ORDER BY te.valoracion DESC LIMIT 5";
$resultado = $con->query($sql);
$testimonios = $resultado->fetch_array();
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
                    <div class="block text-center w-96 font-semibold">
                        <p class="text-xl text-blue-800 leading-10">¿Que estas buscando?</p>
                        <p class="text-3xl text-red-700 leading-10">Ven y descubre todo lo que te ofrecemos!</p>
                        <p class="text-lg text-black leading-10">Todos nuestros productos son elaborados con mucha delicadeza y pasion pensando siempre en usted</p>
                        <a href="catalogo.php" class="items-center"><button class="w-72 h-12 rounded-md bg-blue-900/90 text-white font-bold hover:bg-blue-800/90">Ver productos </button></a>
                    </div>
                </div>
            </div></br>
            <div class="container mx-auto transition-all duration-700">
                <div class="flex flex-row justify-around items-center">
                    <div class="basis-1/4 sm:basis-1/3 w-full h-0.5 border-black/10 border"></div>
                    <div class="basis-1/2 sm:basis-1/4 text-center text-lg">
                        <p class="font-semibold text-3xl">Nuestros Productos</p>
                    </div>
                    <div class="basis-1/4 sm:basis-1/3 w-full h-0.5 border-black/10 border"></div>
                </div>
                <div class="grid max-[600px]:grid-cols-1 min-[601px]:grid-cols-2 lg:grid-cols-4 gap-4 mx-5 py-5 transition-all duration-700">
                    <div class="col-span-1 w-full bg-slate-50 shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_1.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Cafes y Bebidas Calientes</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Incluye todo lo que es cafe y sus variedades.</p>
                                <a href="catalogo.php?c=Cafes%20y%20Bebidas%20Calientes&n=9&i=1" class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_2.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Pasteleria</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Incluye todo tipo de tortas y pasteles.</p>
                                <a href="catalogo.php?c=Pasteleria&n=10&i=2" class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_3.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Platos Salados</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Incluye manjares como pollo a la plancha hasta empanadas.</p>
                                <a href="catalogo.php?c=Platos%20Salados&n=10&i=3" class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_4.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Postres</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Incluye postres pequeños como paits de manzana, etc.</p>
                                <a href="catalogo.php?c=Postres&n=10&i=4" class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_5.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Jugos</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Variedades de jugos hasta batidos de frutas.</p>
                                <a href="catalogo.php?c=Jugos&n=10&i=5" class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                        <!--Tarjeta de categoria-->
                        <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                            <div class="h-80 sm:h-72 lg:h-64 w-full transition-all duration-700">
                                <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="Public/images/negocio/categoria/categoria_6.jpg" />
                            </div>
                            <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                            <div class="absolute px-4 inset-0 flex translate-y-[80%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                                <h1 class="font-dmserif text-2xl font-bold text-white">Especiales</h1>
                                <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Postres y platos que solo sirve la casa.</p>
                                <a class="w-32 rounded-lg bg-neutral-900 py-2 px-3.5 font-com text-sm capitalize text-white shadow shadow-black/60">Ver mas</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container mx-auto transition-all duration-700">
                <div class="flex flex-row justify-around items-center">
                    <div class="basis-1/5 sm:basis-1/4 w-full h-0.5 border-black/10 border"></div>
                    <div class="basis-[60%] sm:basis-1/2 text-center text-lg">
                        <p class="font-semibold text-3xl">Lo que opinan nuestros clientes</p>
                    </div>
                    <div class="basis-1/5 sm:basis-1/4 w-full h-0.5 border-black/10 border"></div>
                </div>
                <!--Carrusel de testimonios-->
                <div class="py-16 px-10">
                    <div id="carouselExampleCaptions" class="relative" data-te-carousel-init data-te-carousel-slide>
                        <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
                            <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[1000ms] ease-in-out motion-reduce:transition-none" data-te-carousel-active data-te-carousel-item style="backface-visibility: hidden">
                                <p class="mx-auto max-w-4xl text-xl italic text-black">
                                    "<?php echo $testimonios['testimonio'] ?>"
                                </p>
                                <div class="flex justify-center mt-4 items-center mr-3">
                                    <div class="pb-1">
                                        <?php
                                        //Va imprimir la cantidad de estrellas correspondientes
                                        for ($i = 0; $i < $testimonios['valoracion']; $i++) {
                                        ?>
                                            <label class="text-2xl mr-2 text-yellow-500">&#9733;</label>
                                        <?php
                                        }
                                        ?>
                                    </div>
                                </div>
                                <p class="text-black my-4">
                                    <?php echo $testimonios['nombre'] ?>
                                </p>
                            </div>
                            <?php
                            while ($testimonios = $resultado->fetch_array()) {
                            ?>
                                <div class="relative float-left -mr-[100%] hidden w-full text-center transition-transform duration-[1000ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item style="backface-visibility: hidden">
                                    <p class="mx-auto max-w-4xl text-xl italic text-black dark:text-black">
                                        "<?php echo $testimonios['testimonio'] ?>"
                                    </p>
                                    <div class="flex justify-center mt-4 items-center mr-3">
                                        <div class="pb-1">
                                            <?php
                                            //Va imprimir la cantidad de estrellas correspondientes
                                            for ($i = 0; $i < $testimonios['valoracion']; $i++) {
                                            ?>
                                                <label class="text-2xl mr-2 text-yellow-500">&#9733;</label>
                                            <?php
                                            }
                                            ?>
                                        </div>
                                    </div>
                                    <p class="text-black my-4">
                                        <?php echo $testimonios['nombre'] ?>
                                    </p>
                                </div>
                            <?php
                            }
                            ?>
                        </div>
                        <button class="absolute top-0 bottom-0 left-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-1000 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-black dark:opacity-50 dark:hover:text-black dark:focus:text-black" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="prev">
                            <span class="inline-block h-8 w-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Anterior</span>
                        </button>
                        <button class="absolute top-0 bottom-0 right-0 z-[1] flex w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-black opacity-50 transition-opacity duration-1000 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-black hover:no-underline hover:opacity-90 hover:outline-none focus:text-black focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none dark:text-black dark:opacity-50 dark:hover:text-black dark:focus:text-black" type="button" data-te-target="#carouselExampleCaptions" data-te-slide="next">
                            <span class="inline-block h-8 w-8">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                                </svg>
                            </span>
                            <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Siguiente</span>
                        </button>
                    </div>
                </div>
            </div>

            
        </section>
        <!--Borde inferior de la seccion-->
        <!--<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1" d="M0,96L80,90.7C160,85,320,75,480,106.7C640,139,800,213,960,218.7C1120,224,1280,160,1360,128L1440,96L1440,0L1360,0C1280,0,1120,0,960,0C800,0,640,0,480,0C320,0,160,0,80,0L0,0Z">
            </path>
        </svg>-->
    </div>

</body>
<?php include("components/footer.php") ?>