<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL CLIENTE ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../back_end/controladores/p_add_cliente.php">
            <div class="">
                <label class="">Nombres</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombres" placeholder="Nombres del cliente" required>
                </div>
            </div>
            <div class="">
                <label class="">Apellidos</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_apellidos" placeholder="Apellidos del cliente" required>
                </div>
            </div>
            <div class="">
                <label class="">Direccion</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_direccion" placeholder="Ingrese direccion" required>
                </div>
            </div>
            <div class="">
                <label class="">Email</label>
                <div class="">
                <input type="email" class="form-control" name="txt_email" placeholder="Ingrese email" required>
                </div>
            </div>
            <div class="">
                <label class="">Celular</label> 
                <div class="">
                <input type="text" class="form-control" name="txt_celular" placeholder="Ingrese celular" required>
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_cliente');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form> 
    </div>
</section>