<nav class="container sticky -top-1 mx-auto mt-0 lg:mt-5 ">
  <div class="flex items-center justify-between flex-wrap lg:flex-nowrap">
    <!--Sub menu de links-->
    <div id="menu" class="hidden block w-72 h-50 mr-60 pt-2 px-6 pb-2 lg:mr-0 lg:w-auto lg:h-16 lg:flex lg:items-center bg-white lg:p-6 order-4 lg:order-1">
      <div class="lg:mt-0 lg:mx-4">
        <a href="#" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><img class="h-6 w-6 mr-2" src="./images/inicio.svg" /></div>
          <div><span>Inicio</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="#" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><img class="h-6 w-6 mr-2" src="./images/tienda.png" /></div>
          <div><span>Tienda</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="#" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><img class="h-6 w-6 mr-2" src="./images/nosotros.png" /></div>
          <div><span>Nosotros</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="#" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><img class="h-6 w-6 mr-2" src="https://img.icons8.com/ios-filled/50/null/filled-message.png" /></div>
          <div><span>Contactenos</span></div>
        </a>
      </div>
    </div>
    <!--Sub menu de logo-->
    <div class="flex w-1/3 p-6 h-16 items-center justify-center flex-grow lg:w-auto bg-white order-2">
      <div class="mr-6">
        <span class="text-xl tracking-tight text-red-900 font-bold">Camila</span>
      </div>
    </div>
    <!--Sub menu de boton oculto-->
    <div class="flex justify-start items-center p-6 h-16 lg:hidden w-1/3 lg:w-auto bg-white order-1">
      <button onclick="activar_menu()" class="items-center px-2 py-2 ">
        <img class="h-6 w-6 hover:text-white" src="./images/menu-icons.svg" />
      </button>
    </div>
    <!--Sub menu de item cuenta-->
    <div id="cuenta" class="hidden w-72 mr-60 py-6 pl-2 h-16 lg:mr-0 lg:w-auto lg:flex items-center lg:justify-end bg-white order-5 lg:order-3">
      <div class="lg:mt-0 mx-4 lg:mx-0">
        <button onclick="activar_login()" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><img class="h-6 w-6 mr-2" src="./images/cuenta-icon.png" /></div>
          <div><span>MI CUENTA</span></div>
        </button>
      </div>
    </div>
    <!--Sub menu de item carrito-->
    <div class="w-1/3 lg:w-auto h-16 flex justify-end items-center bg-white lg:py-6 pr-6 order-3 lg:order-4">
      <div class=" lg:mx-4"><a href="#" class="grid grid-cols-2 grid-rows-2 font-bold text-sm">
          <div class="col-span-1 row-span-2 pt-2">
            <img class="h-6 w-6 m-auto" src="./images/carrito-icon.png" />
          </div>
          <div class="col-span-1 text-red-900"><span>S/0.00</span></div>
          <div class="col-span-1 text-xs text-gray-500"><span>0 Helados</span></div>
        </a></div>
    </div>
  </div>
  <!--Para el menu login-->
  <?php include("login.php") ?>
</nav>
<!--Llamando a sus scripts-->
<script>
  function activar_menu() {
    document.querySelector("#menu").classList.toggle("hidden");
    document.querySelector("#cuenta").classList.toggle("hidden");
  }

  function activar_login() {
    document.querySelector("#m-login").classList.toggle("hidden");
    document.querySelector("#b-login").classList.toggle("hidden");
  }

  function ocultar_login() {
    document.querySelector("#m-login").classList.toggle("hidden");
    document.querySelector("#b-login").classList.toggle("hidden");
  }
</script>