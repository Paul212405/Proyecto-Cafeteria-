<section class="block">
    <div class="lg:ml-72 px-5">
        <h1 class="text-center">DATOS DEL USUARIO ::: AGREGAR DATOS</h1>
        <form method="POST" action="./../../back_end/controladores/p_add_usuario.php">
            <div class="">
                <label class="">Nombre</label>
                <div class="">
                    <input type="text" class="form-control" name="txt_nombre" placeholder="Nombre de usuario" required>
                </div>
            </div>
            <div class="">
                <label class="">Contraseña</label>
                <div class="">
                    <input type="password" class="form-control" name="txt_pass" placeholder="Ingrese su contraseña" required>
                </div>
            </div>
            <div class="">
                <label class="">Email</label>
                <div class="">
                    <input type="email" class="form-control" name="txt_email" placeholder="Correo electronico" required>
                </div>
            </div>
            <div class="">
                <label class="">Rol</label>
                <div class="">
                    <select name="tipo" id="">
                        <option value="C" selected>
                            Cliente
                        </option>
                        <option value="A">
                            Administrador
                        </option>
                    </select>
                </div>
            </div>
            <div class="">
                <div class="">
                    <button  type="submit" name="edit" class="btn btn-info"><i class="fa fa-save mx-2"></i> Guardar Datos</button>
                </div>
                <div class="">
                    <button onclick="cargarcomponente('./paginas/close.php','contenedor_usuario');event.preventDefault();" class="btn btn-danger"><i class="fa fa-power-off mx-2"></i> Cancelar</button>
                </div>
            </div>
        </form>
    </div>
</section>