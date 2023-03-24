<?php
include_once("utils/head.php");
?>
<?php include("components/navigate.php") ?>

<body class="bg-[url('../Public/images/negocio/contacto.png')] bg-cover">
    <div class="block text-center my-10 text-3xl pt-16 font-bold text-white">
        <h1>CONTACTENOS</h1>
    </div>
    </div>
    <div class="w-full bg-white">
        <div class="container mx-auto bg-white">
            <div class="flex justify-between items-start flex-wrap px-10 py-12">
                <!--Bloque de contacto-->
                <div class="block w-full sm:w-2/5 text-xl">
                    <p class="text-3xl font-bold my-4 text-left">CONTACTENOS</p>
                    <div class="flex justify-start gap-3 items-center mb-4">
                        <i class="fas fa-phone-alt fa-lg"></i>
                        <a href="tel:+51 973348411" class="text-decoration-none mt-4">
                            +51 973348411
                        </a>
                    </div>
                    <div class="flex justify-start gap-3 items-center mb-4">
                        <i class="fas fa-envelope fa-lg"></i>
                        <a href="emirjrmasna@gmail.com" class="text-decoration-none">
                            emirjrmasna@gmail.com
                        </a>
                    </div>
                    <div class="flex justify-start gap-3 items-start mb-4">
                        <i class="fa fa-route fa-lg"></i>
                        <p class="">
                            Direccion: 28 de Julio - Huacho, Huaura - Lima
                        </p>
                    </div>
                    <div class="flex justify-center items-center my-5">
                        <a href="#" class="p-3">
                            <i class="fab fa-whatsapp fa-lg"></i>
                        </a>
                        <a href="#" class="p-3">
                            <i class="fab fa-instagram fa-lg"></i>
                        </a>
                        <a href="#" class="p-3">
                            <i class="fab fa-youtube fa-lg"></i>
                        </a>
                        <a href="#" class="p-3">
                            <i class="fab fa-facebook fa-lg"></i>
                        </a>
                    </div>
                    <div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d15662.117175401996!2d-77.5963265!3d-11.073874149999998!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2spe!4v1679333784027!5m2!1ses!2spe" class="w-full mx-auto h-[30em]" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <!--Bloque de barra lateral-->
                <div class="hidden sm:block w-0.5 h-[50em] border-black/10 border"></div>
                <!--Bloque de consulta-->
                <div class="block w-full sm:w-2/5 ">
                    <p class="text-xl font-bold my-4 text-center">ESCRIBANOS</p>
                    <form action="p_login.php" method="post">
                        <div class="block py-2">
                            <label class=" pr-8">Nombre Completo</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_nombre_completo">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Correo Electronico</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="email" name="txt_correo">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Telefono</label>
                            <input class="w-full h-12 border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" type="text" name="txt_tel">
                        </div>
                        <div class="block py-2">
                            <label class=" pr-8">Asunto</label>
                            <textarea class="w-full border-t-0 border-l-0 border-r-0 border-b-2 border-b-gray-500 focus:border-b-blue-800 rounded-sm mt-2 p-4 focus:outline-none" rows="3" name="txa_asunto"></textarea>
                        </div>
                        <input class="w-full mt-2 h-12 rounded-md bg-blue-800/90 text-white font-bold hover:bg-blue-800/90 cursor-pointer" type="submit" value="ENVIAR CONSULTA">
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
<?php include("components/footer.php") ?>