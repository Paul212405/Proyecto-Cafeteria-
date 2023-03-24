<div id="carouselExampleControls" class="relative -m-24 mb-px z-0" data-te-carousel-init data-te-carousel-slide>
    <!--Imagenes carrusel-->
    <div class="relative w-full overflow-hidden after:clear-both after:block after:content-['']">
        <div class="relative z-0 float-left -mr-[100%] w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none bg-cover" data-te-carousel-item data-te-carousel-active>
            <!--Para el mensaje-->
            <h1 class="z-[1] absolute top-[70%] left-[38%] sm:top-1/3 sm:left-[20%] text-white font-bold text-6xl text-center sm:text-7xl sm:text-right">Cafeteria </br>Paul y Camila</h1>    
            <div class="bg-[url('./../Public/images/negocio/slider_01.jpg')] block w-full h-[125vh] bg-cover opacity-80" alt="slider_01"></div>           
        </div>
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
            <!--Para el mensaje-->
            <h1 class="z-[1] absolute top-[70%] left-[38%] sm:top-1/3 sm:left-[20%] text-white font-bold text-6xl text-center sm:text-7xl sm:text-right">Diferentes </br>Opciones</h1>
            <div class="bg-[url('./../Public/images/negocio/slider_02.jpg')] block w-full h-[125vh] bg-cover opacity-80" alt="slider_02"></div>
        </div>
        <div class="relative float-left -mr-[100%] hidden w-full transition-transform duration-[600ms] ease-in-out motion-reduce:transition-none" data-te-carousel-item>
            <!--Para el mensaje-->
            <h1 class="z-[1] absolute top-[70%] left-[38%] sm:top-1/3 sm:left-[20%] text-white font-bold text-6xl text-center sm:text-7xl sm:text-right">Ricos </br>y Naturales</h1>
            <div class="bg-[url('./../Public/images/negocio/slider_03.jpg')] block w-full h-[125vh] bg-cover opa-80" alt="slider_03"></div>
        </div>
    </div>
    <!--Boton Izquierdo-->
    <button class="hidden sm:flex absolute top-0 bottom-0 left-20 lg:left-10 z-[1] w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="prev">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 19.5L8.25 12l7.5-7.5" />
            </svg>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Antes</span>
    </button>
    <!--Boton derecho-->
    <button class="hidden sm:flex absolute top-0 bottom-0 right-20 lg:right-10 z-[1] w-[15%] items-center justify-center border-0 bg-none p-0 text-center text-white opacity-50 transition-opacity duration-150 ease-[cubic-bezier(0.25,0.1,0.25,1.0)] hover:text-white hover:no-underline hover:opacity-90 hover:outline-none focus:text-white focus:no-underline focus:opacity-90 focus:outline-none motion-reduce:transition-none" type="button" data-te-target="#carouselExampleControls" data-te-slide="next">
        <span class="inline-block h-8 w-8">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" class="h-8 w-8">
                <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
            </svg>
        </span>
        <span class="!absolute !-m-px !h-px !w-px !overflow-hidden !whitespace-nowrap !border-0 !p-0 ![clip:rect(0,0,0,0)]">Siguiente</span>
    </button>
</div>