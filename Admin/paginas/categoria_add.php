<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DE LA CATEGORIA ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../back_end/controladores/p_add_categoria.php">
            <div class="">
                <label class="">Nombre</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre de la categoria" required>
                </div>
            </div>
            <div class="">
                <label class="">Descripcion</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_descripcion" placeholder="Descripcion de la categoria" required>
                </div> 
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_categoria');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>