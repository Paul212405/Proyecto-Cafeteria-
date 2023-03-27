<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL PEDIDO ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../back_end/controladores/p_add_producto.php">
            <div class="">
                <label class="">Total</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_total" placeholder="Total" required>
                </div>
            </div>
            <div class="">
                <label class="">Estado</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_estado" placeholder="Estado" required>
                </div> 
            </div>
            
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_pedido');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>