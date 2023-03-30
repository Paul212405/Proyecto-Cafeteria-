<?php
include_once("utils/head.php");
?>
<?php include("components/navigate.php") ?>

<body class="bg-slate-50/90">
    <div class="w-full mx-auto mb-10 mt-24 px-6">
        <div class="transition-all duration-700 grid grid-cols-1 sm:grid-cols-2 p-4">
            <div class="transition-all duration-700 max-sm:flex hidden lg:flex lg col-span-1 px-24 items-center justify-center">
                <img class="transition-all duration-700 object-cover w-full rounded-lg" src="./Public/images/negocio/nosotros/persona_1.jpg" alt="image del perfil del miembro del proyecto">
            </div>
            <div class="max-sm:col-span-1 col-span-2 lg:col-span-1 transition-all duration-700">
                <div class="block px-4 py-16">
                    <p class="font-bold font-mono text-2xl lg:text-4xl leading-[50px] transition-all duration-700">
                        Soy Mallqui, soy un gran programador y diseñador de alto valor</p>
                    <p class="text-lg leading-10 font-normal my-4">
                        Soy estudiante de Ingenieria de Sistemas en la UNJFSC, lleve una media beca en SENATI y me desempeño muy bien diseñador front-end y desallorador back-end en las distintas tecnologias, soy una persona con valores y de muy buena comunicacion cuando se trata de trabajar en equipo y solucionar problemas.
                    </p>
                </div>
            </div>
        </div>
        <div class="mx-2 sm:mx-4 transition-all duration-700 my-4">
            <div class="flex justify-center items-center">
                <p class="font-semibold text-3xl">Mis Talentos</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 sm:px-8 py-5 transition-all duration-700">
                <div class="col-span-1 w-full bg-slate-50 shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_1.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Desarrollo Front end</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Diseño de interfaces para clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_2.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Desarrollo Back end</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Diseño de flujos y conexion con bd y apis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_3.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Gestor de proyectos</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Manejo de requerimientos y organizacion del proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_4.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Hobbies</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Como el dibujo, el baile y los videojuegos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-2 sm:mx-4 transition-all duration-700 my-4">
        <div class="flex justify-center items-center">
            <p class="font-semibold text-3xl">Mis Conocimientos</p>
        </div>
        <div class="flex justify-center gap-8 items-center flex-wrap my-5 px-4">
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c01.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    HTML 5
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c02.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    CSS
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c03.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    JavaScript
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c05.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    SQL y MYSQL
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c10.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    React.js
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c13.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    PHP
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c20.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Tailwind Css
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c18.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Photoshop
                </p>
            </div>
        </div>
    </div>
    <div class="w-full mx-auto mb-10 mt-24 px-6">
        <div class="transition-all duration-700 grid grid-cols-1 sm:grid-cols-2 p-4">
            <div class="transition-all duration-700 max-sm:flex hidden lg:flex lg col-span-1 px-24 items-center justify-center">
                <img class="transition-all duration-700 object-cover w-full rounded-lg" src="./Public/images/negocio/nosotros/persona_2.jpg" alt="image del perfil del miembro del proyecto">
            </div>
            <div class="max-sm:col-span-1 col-span-2 lg:col-span-1 transition-all duration-700">
                <div class="block px-4 py-16">
                    <p class="font-bold font-mono text-2xl lg:text-4xl leading-[50px] transition-all duration-700">
                        Soy Camila, soy una diseñadora de paginas web y persona de retos</p>
                    <p class="text-lg leading-10 font-normal my-4">
                        Tu perfil como persona y profesional.
                    </p>
                </div>
            </div>
        </div>
        <div class="mx-2 sm:mx-4 transition-all duration-700 my-4">
            <div class="flex justify-center items-center">
                <p class="font-semibold text-3xl">Mis Talentos</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 sm:px-8 py-5 transition-all duration-700">
                <div class="col-span-1 w-full bg-slate-50 shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_1.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Desarrollo Front end</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Diseño de interfaces para clientes.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_2.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Desarrollo Back end</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Diseño de flujos y conexion con bd y apis.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_3.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Gestor de proyectos</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Manejo de requerimientos y organizacion del proyecto.</p>
                        </div>
                    </div>
                </div>
                <div class="col-span-1 w-full bg-slate-50 rounded-b-md shadow-lg">
                    <!--Tarjeta de categoria-->
                    <div class="w-full group relative cursor-pointer items-center justify-center overflow-hidden transition-shadow hover:shadow-xl hover:shadow-black/30">
                        <div class="h-56 lg:h-64 w-full transition-all duration-700">
                            <img class="h-full w-full object-cover transition-transform duration-500 group-hover:rotate-3 group-hover:scale-125" src="./Public/images/negocio/nosotros/talento_4.jpg" />
                        </div>
                        <div class="absolute inset-0 bg-gradient-to-b from-transparent via-transparent to-black group-hover:from-black/70 group-hover:via-black/60 group-hover:to-black/70"></div>
                        <div class="absolute px-4 inset-0 flex translate-y-[90%] flex-col items-center justify-center text-center transition-all duration-500 group-hover:translate-y-0">
                            <h1 class="font-dmserif text-2xl font-bold text-white">Hobbies</h1>
                            <p class="mb-3 text-lg italic text-white opacity-0 transition-opacity duration-300 group-hover:opacity-100">Como el dibujo, el baile y los videojuegos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-2 sm:mx-4 transition-all duration-700 my-4">
        <div class="flex justify-center items-center">
            <p class="font-semibold text-3xl">Mis Conocimientos</p>
        </div>
        <div class="flex justify-center gap-8 items-center flex-wrap my-5 px-4">
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c01.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    HTML 5
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c02.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    CSS
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c03.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    JavaScript
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c05.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    SQL y MYSQL
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c10.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    React.js
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c13.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    PHP
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c20.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Tailwind Css
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c18.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Photoshop
                </p>
            </div>
        </div>
    </div>
    <div class="mx-2 sm:mx-4 transition-all duration-700 my-12">
        <div class="flex justify-center items-center">
            <p class="text-3xl font-bold mb-4">Este proyecto fue creado con</p>
        </div>
        <div class="flex justify-center gap-8 items-center flex-wrap my-5 px-4">
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c01.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    HTML 5
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c02.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    CSS
                </p>
            </div>
            <div class="block">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c03.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    JavaScript
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c06.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    MYSQL
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c12.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Git y github
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c13.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    PHP
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c20.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Tailwind Css
                </p>
            </div>
            <div class="block text-center">
                <div class="flex justify-center items-center w-full">
                    <img src="./Public/images/negocio/nosotros/c30.png" class="w-16 h-16 hover:w-20 hover:h-20 transition-all duration-700 hover:shadow-2xl mb-4 object-cover rounded-full">
                </div>
                <p class="text-center text-2xl">
                    Canvas
                </p>
            </div>
        </div>
    </div>
    </div>
</body>
<?php include("components/footer.php") ?>