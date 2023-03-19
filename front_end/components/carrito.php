<div id="m-carrito" class=" bg-black/70 z-30 opacity-100 min-h-screen w-full fixed top-0 left-0 right-0"></div>
<div id="b-carrito" class=" bg-white w-80 z-30 fixed top-0 sm:top-8 right-0 sm:right-12">
    <!--Interfaz de carrito-->
    <div class="block">
        <div class="flex items-center justify-between w-full p-3 font-bold text-lg border-b-2 border-b-black/20">
            <p>CARRITO</p>
            <button onclick="activar_carrito()">
                <i class="fas fa-window-close fa-lg"></i>
            </button>
        </div>
        <div class="block w-full p-3 px-4 text-base border-b-2 overflow-y-auto border-b-black/40 max-h-[400px]">
            <!--Un item del carrito o tarjeta-->
            <div class="flex justify-start pb-2 gap-3 items-center mb-3 border-dashed border-b-[1px] border-b-black">
                <img class="w-16 h-16 rounded-full" src="./../Public/images/productos/te_helado.jpg">
                <div class="block grow text-xs">
                    <div class="flex justify-between items-center">
                        <p class="font-bold text-center text-blue-800">Te Helado</p>
                        <button><i class="fas fa-window-close fa-sm"></i></button>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Cantidad:</p>
                        <p>5</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Precio:</p>
                        <p>S/ 10.00</p>
                    </div>
                    <div class="flex justify-between items-center">
                        <p class="font-bold">Sub Total:</p>
                        <p class="font-bold text-blue-900">S/ 50.00</p>
                    </div>
                </div>
            </div>
            
        </div>
        <div class="block w-full p-3 text-center text-sm leading-6 transition-all duration-300">
            <div class="flex justify-between px-2 items-center mb-2">
                <p class="text-xl font-bold">TOTAL:</p>
                <p class="text-2xl text-blue-900 font-bold">S/. 200.00</p>
            </div>
        </div>
        <div class="flex flex-wrap mx-5 mb-5 text-center">
            <a href="" class="w-full my-1 px-10 py-2 bg-slate-300/70 hover:bg-slate-300/40 text-lg font-bold rounded-lg">Ver Detalle</a>
            <a href="" class="w-full my-1 px-10 py-2 text-white bg-blue-700 hover:bg-blue-800 text-lg font-bold rounded-lg">Finalizar Compra</a>
        </div>
    </div>
</div>