<?php
//Recibiendo los datos del usuario
$usuario = $_GET['usuario'];
$pass = $_GET['pass'];
?>
<div id="modal" class="flex items-center justify-center fixed top-0 left-0 right-0 w-full min-h-screen bg-black/70 z-[9999]">
    <div class="w-72 bg-white px-6 py-4 rounded-lg">
        <div class="flex justify-end items-center boder-b-2 border-black">
            <a href=""><i class="fas fa-window-close fa-lg"></i></a>
        </div>
        <h1 class="font-bold text-center leading-10">Registro Exitoso</h1>
        <div class="flex justify-between items-center my-2">
            <p class="font-bold">Usuario:</p>
            <p class="font-normal cursor-pointer" onclick="navigator.clipboard.writeText(this.innerText)">
                <?php echo $usuario; ?>
            </p>
        </div>
        <div class="flex justify-between items-center my-2">
            <p class="font-bold">Password:</p>
            <p class="font-normal cursor-pointer" onclick="navigator.clipboard.writeText(this.innerText)">
                <?php echo $pass; ?>
            </p>
        </div>

    </div>
</div>