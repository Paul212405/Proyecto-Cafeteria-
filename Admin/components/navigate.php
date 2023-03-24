<script>
    function activar_sub_menu() {
        document.getElementById("menu_mantenimiento").classList.toggle("hidden");
    }
</script>
<div class="z-20 transition-all duration-700 max-lg:flex max-lg:justify-between max-lg:items-center lg:w-72 overflow-y-hidden lg:overflow-y-auto overflow-x-hidden w-full h-16 pb-3 lg:h-full bg-black lg:max-h-screen sticky lg:fixed lg:top-0 -top-1 lg:left-0">
    <div class="max-sm:hidden px-3 pt-2 lg:pt-8">
        <div class="flex items-center justify-center">
            <!--Logo de empresa-->
            <a href="">
                <img src="../Public/images/productos/producto_1.jpg" class="w-12 h-12">
            </a>
        </div>
    </div>
    <div class="max-lg:hidden px-6 pt-4">
        <!--Barra de division-->
        <hr class="border-gray-700" />
    </div>
    <div class="px-6 pt-4">
        <!--Menu de lista-->
        <ul class="text-left flex max-sm:justify-between lg:flex-col space-y-2 text-lg">
            <li class="relative max-lg:flex max-lg:justify-start text-gray-500 hover:text-white focus-within:text-white">
                <div class="lg:absolute lg:inset-y-0 lg:left-0 flex items-center pl-2 pointer-events-none">
                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M4.75 6.75C4.75 5.64543 5.64543 4.75 6.75 4.75H17.25C18.3546 4.75 19.25 5.64543 19.25 6.75V17.25C19.25 18.3546 18.3546 19.25 17.25 19.25H6.75C5.64543 19.25 4.75 18.3546 4.75 17.25V6.75Z"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M9.75 8.75V19"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5 8.25H19"></path>
                    </svg>
                </div>
                <button class="text-left inline-block w-full lg:py-2 pl-2 lg:pl-8 pr-4 rounded hover:bg-black lg:hover:bg-gray-800 lg:focus:outline-none lg:focus:ring-1 lg:focus:ring-gray-500 focus:bg-black lg:focus:bg-gray-800">Resumen</button>
            </li>
            <li class="">
                <div class="relative flex justify-between items-center text-gray-500 hover:text-white focus-within:text-white">
                    <div class="flex items-center w-full">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-2 pointer-events-none">
                            <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.1191 5.61336C13.0508 5.11856 12.6279 4.75 12.1285 4.75H11.8715C11.3721 4.75 10.9492 5.11856 10.8809 5.61336L10.7938 6.24511C10.7382 6.64815 10.4403 6.96897 10.0622 7.11922C10.006 7.14156 9.95021 7.16484 9.89497 7.18905C9.52217 7.3524 9.08438 7.3384 8.75876 7.09419L8.45119 6.86351C8.05307 6.56492 7.49597 6.60451 7.14408 6.9564L6.95641 7.14408C6.60452 7.49597 6.56492 8.05306 6.86351 8.45118L7.09419 8.75876C7.33841 9.08437 7.3524 9.52216 7.18905 9.89497C7.16484 9.95021 7.14156 10.006 7.11922 10.0622C6.96897 10.4403 6.64815 10.7382 6.24511 10.7938L5.61336 10.8809C5.11856 10.9492 4.75 11.372 4.75 11.8715V12.1285C4.75 12.6279 5.11856 13.0508 5.61336 13.1191L6.24511 13.2062C6.64815 13.2618 6.96897 13.5597 7.11922 13.9378C7.14156 13.994 7.16484 14.0498 7.18905 14.105C7.3524 14.4778 7.3384 14.9156 7.09419 15.2412L6.86351 15.5488C6.56492 15.9469 6.60451 16.504 6.9564 16.8559L7.14408 17.0436C7.49597 17.3955 8.05306 17.4351 8.45118 17.1365L8.75876 16.9058C9.08437 16.6616 9.52216 16.6476 9.89496 16.811C9.95021 16.8352 10.006 16.8584 10.0622 16.8808C10.4403 17.031 10.7382 17.3519 10.7938 17.7549L10.8809 18.3866C10.9492 18.8814 11.3721 19.25 11.8715 19.25H12.1285C12.6279 19.25 13.0508 18.8814 13.1191 18.3866L13.2062 17.7549C13.2618 17.3519 13.5597 17.031 13.9378 16.8808C13.994 16.8584 14.0498 16.8352 14.105 16.8109C14.4778 16.6476 14.9156 16.6616 15.2412 16.9058L15.5488 17.1365C15.9469 17.4351 16.504 17.3955 16.8559 17.0436L17.0436 16.8559C17.3955 16.504 17.4351 15.9469 17.1365 15.5488L16.9058 15.2412C16.6616 14.9156 16.6476 14.4778 16.811 14.105C16.8352 14.0498 16.8584 13.994 16.8808 13.9378C17.031 13.5597 17.3519 13.2618 17.7549 13.2062L18.3866 13.1191C18.8814 13.0508 19.25 12.6279 19.25 12.1285V11.8715C19.25 11.3721 18.8814 10.9492 18.3866 10.8809L17.7549 10.7938C17.3519 10.7382 17.031 10.4403 16.8808 10.0622C16.8584 10.006 16.8352 9.95021 16.8109 9.89496C16.6476 9.52216 16.6616 9.08437 16.9058 8.75875L17.1365 8.4512C17.4351 8.05308 17.3955 7.49599 17.0436 7.1441L16.8559 6.95642C16.504 6.60453 15.9469 6.56494 15.5488 6.86353L15.2412 7.09419C14.9156 7.33841 14.4778 7.3524 14.105 7.18905C14.0498 7.16484 13.994 7.14156 13.9378 7.11922C13.5597 6.96897 13.2618 6.64815 13.2062 6.24511L13.1191 5.61336Z"></path>
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M13.25 12C13.25 12.6904 12.6904 13.25 12 13.25C11.3096 13.25 10.75 12.6904 10.75 12C10.75 11.3096 11.3096 10.75 12 10.75C12.6904 10.75 13.25 11.3096 13.25 12Z"></path>
                            </svg>
                        </div>
                        <button class="text-left inline-block w-full py-2 pl-8 pr-4 rounded hover:bg-black lg:hover:bg-gray-800 focus:bg-black lg:focus:outline-none lg:focus:ring-1 focus:ring-gray-500 lg:focus:bg-gray-800">Mantenimiento</button>
                    </div>
                    <button onclick="activar_sub_menu()" class="lg:absolute right-0 flex items-center p-1" tabindex="-1">
                        <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M15.25 10.75L12 14.25L8.75 10.75"></path>
                        </svg>
                    </button>
                </div>
                <div class="pt-2 pl-4">
                    <ul id="menu_mantenimiento" class="hidden block z-50 transition-all duration-1000 max-lg:fixed px-2 max-lg:pb-4 text-gray-500 lg:border-l border-gray-700 max-lg:bg-black">
                        <li class="cursor-pointer">
                            <button onclick="cargarcomponente('./paginas/usuario.php','contenedor_admin')" class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Usuarios</button>
                        </li>
                        <li>
                            <button class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Clientes</button>
                        </li>
                        <li>
                            <button class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Testimonios</button>
                        </li>
                        <li>
                            <button class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Productos</button>
                        </li>
                        <li>
                            <button class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Categorias</button>
                        </li>
                        <li>
                            <button class="text-left inline-block w-full px-4 py-2 rounded hover:bg-gray-800 hover:text-white focus:outline-none focus:ring-1 focus:ring-gray-500 focus:text-white">Pedidos</button>
                        </li>
                    </ul>
                </div>
            </li>
            <li class="relative max-lg:flex max-lg:justify-start items-center text-gray-500 hover:text-white focus-within:text-white max-lg:pb-2">
                <div class="lg:absolute lg:inset-y-0 lg:left-0 flex max-lg:justify-start items-center pl-2 pointer-events-none">
                    <svg class="w-5 h-5 stroke-current" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M5.75 19.2502H6.25C6.80229 19.2502 7.25 18.8025 7.25 18.2502V15.75C7.25 15.1977 6.80229 14.75 6.25 14.75H5.75C5.19772 14.75 4.75 15.1977 4.75 15.75V18.2502C4.75 18.8025 5.19772 19.2502 5.75 19.2502Z"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M11.75 19.2502H12.25C12.8023 19.2502 13.25 18.8025 13.25 18.2502V12.75C13.25 12.1977 12.8023 11.75 12.25 11.75H11.75C11.1977 11.75 10.75 12.1977 10.75 12.75V18.2502C10.75 18.8025 11.1977 19.2502 11.75 19.2502Z"></path>
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" d="M17.75 19.2502H18.25C18.8023 19.2502 19.25 18.8025 19.25 18.2502V5.75C19.25 5.19772 18.8023 4.75 18.25 4.75H17.75C17.1977 4.75 16.75 5.19772 16.75 5.75V18.2502C16.75 18.8025 17.1977 19.2502 17.75 19.2502Z"></path>
                    </svg>
                </div>
                <button class="text-left inline-block w-full max-lg:pb-1 lg:py-2 lg:pl-8 pl-2 lg:pr-4 rounded hover:bg-black lg:hover:bg-gray-800 focus:outline-none lg:focus:ring-1 focus:bg-black focus:ring-gray-500 lg:focus:bg-gray-800">Reportes</button>
            </li>
        </ul>
    </div>
    <div class="max-lg:hidden px-6 pt-8 pb-8">
        <hr class="border-gray-700" />
    </div>
    <div class="text-lg ml-6 max-lg:hidden flex justify-start text-gray-500 hover:text-white focus-within:text-white hover:bg-black lg:hover:bg-gray-800 lg:focus:outline-none lg:focus:ring-1 lg:focus:ring-gray-500 focus:bg-black lg:focus:bg-gray-800 mr-6 rounded">
        <div class="flex items-center pl-2 pointer-events-none">
            <i class="fa fa-power-off"></i>
        </div>
        <a href="./../back_end/conexion/cerrarsesion.php" class="text-left inline-block w-full lg:py-2 lg:pl-2  ">Cerrar Sesion</a>
    </div>
</div>
