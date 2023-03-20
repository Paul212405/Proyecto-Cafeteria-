<script>
    //Evento que se activa al cargar el navigate
    window.addEventListener('load', function() {
        cargarinterfaz('./components/item_carrito.php', 'contenedor_item_carrito')
    });
</script>
<nav class="fixed -top-1 z-10 w-full mt-0 lg:mt-5 mx-auto lg:px-10 ">
  <div class="flex items-center justify-between flex-wrap shadow-md bg-white shadow-gray-600 lg:flex-nowrap">
    <!--Sub menu de links-->
    <div id="menu" class="hidden fixed w-72 top-14 bg-white sm:top-16 h-64 mr-60 pt-2 px-6 pb-2 lg:mr-0 lg:w-auto lg:h-16 lg:flex lg:items-center lg:p-6 order-4 lg:order-1 lg:top-auto lg:relative">
      <div class="lg:mt-0 lg:mx-4">
        <a href="./index.php" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><i class="fas fa-home fa-lg mr-2"></i></div>
          <div><span>Inicio</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="./catalogo.php" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><i class="fas fa-coffee fa-lg mr-2"></i></div>
          <div><span>Tienda</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="#" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><i class="fas fa-users fa-lg mr-2"></i></div>
          <div><span>Nosotros</span></div>
        </a>
      </div>
      <div class="mt-4 lg:mt-0 lg:mx-4">
        <a href="./contactenos.php" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><i class="fas fa-envelope fa-lg mr-2"></i></div>
          <div><span>Contactenos</span></div>
        </a>
      </div>
    </div>
    <!--Sub menu de logo-->
    <div class="flex w-1/3 p-6 h-16 items-center justify-center flex-grow lg:w-auto  order-2">
      <div class="mr-6">
        <span class="text-xl tracking-tight text-red-900 font-bold">Camila</span>
      </div>
    </div>
    <!--Sub menu de boton oculto-->
    <div class="flex justify-start items-center p-6 h-16 lg:hidden w-1/3 lg:w-auto order-1">
      <button onclick="activar_menu()" class="items-center px-2 py-2 ">
        <i class="fa fa-bars fa-lg" aria-hidden="true"></i>
      </button>
    </div>
    <!--Sub menu de item cuenta-->
    <div id="cuenta" class="hidden fixed bg-white top-56 w-72 mr-60 pl-2 h-16 lg:mr-0 lg:relative lg:w-auto lg:flex items-center lg:justify-end  order-5 lg:order-3 lg:top-auto">
      <div class="lg:mt-0 mx-4 lg:mx-0">
        <button onclick="activar_login()" class="flex justify-start items-center lg:justify-center text-black hover:text-red-900 font-bold text-sm">
          <div><i class="fas fa-user fa-lg mr-3"></i></div>
          <div><span>
              <?php
              //Pregunta si ya se logeo el usuario si lo hace busca sus datos
              if ($auth == 1) {
                $sql = "SELECT * FROM tb_cliente 
                WHERE id_usuario = '$idusuario'";
                $result = $con->query($sql);
                $r = $result->fetch_array();
              ?>
                <a href="./cuenta.php"><?php
                                        echo "Hola, " . $r['nombres']; ?></a>
              <?php
              } else {
                echo "MI CUENTA";
              }
              ?>
            </span></div>
        </button>
      </div>
    </div>
    <!--Sub menu de item carrito-->
    <div class="w-1/3 lg:w-auto h-16 flex justify-end items-center lg:py-6 pr-6 order-3 lg:order-4">
<<<<<<< HEAD
      <div class="cursor-pointer lg:mx-4" id="contenedor_item_carrito">
        
      </div>
=======
      <div class="cursor-pointer lg:mx-4"><button onclick="cargarinterfaz('./components/carrito.php','contenedor_carrito')" class="grid grid-cols-2 grid-rows-2 font-bold text-sm">
          <div class="col-span-1 row-span-2 flex justify-center items-center">
            <i class="fas fa-shopping-cart fa-2x m-auto text-gray-400"></i>
          </div>
          <div class="col-span-1 text-red-900"><span>S/0.00</span></div>
          <div class="col-span-1 text-xs text-gray-900"><span>0 Productos</span></div>
            </button></div>
>>>>>>> 6e4e6d11f98f21044a26091bbab58cabaa15f3ab
    </div>
  </div>
  <!--Para el menu login-->
  <?php
  if ($auth != 1) {
    include("login.php");
  }
  ?>
  <!--Para el carrito
  <?php
    //include("carrito.php");
  ?>-->
</nav>
<div id="contenedor_carrito">

</div>
<!--Llamando a sus scripts-->
<script src="./scritps/navigate.js"></script>