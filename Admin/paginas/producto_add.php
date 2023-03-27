<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL PRODUCT0 ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../back_end/controladores/p_add_producto.php">
            <div class="">
                <label class="">Nombre</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre del producto" required>
                </div>
            </div>
            <div class="">
                <label class="">Descripcion</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_descripcion" placeholder="Descripcion del producto" required>
                </div> 
            </div>
            <div class="">
                <label class="">Precio</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_precio" placeholder="Precio del producto" required>
                </div>
            </div>
            <div class="">
                <label class="">Stock</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_stock" placeholder="Stock del producto" required>
                </div>
            </div>
            <div class="">
                <label class="">Estado</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_estado" placeholder="Estado del producto" required>
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_producto');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>