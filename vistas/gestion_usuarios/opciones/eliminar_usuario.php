<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="..">Inicio</a></li>
        <li><a class="ajax-request" href="/gestion_usuarios/gestion_usuario.php">Usuarios</a></li>
        <li><a class="active" href="#">Eliminar Usuario</a></li>
    </ol>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Eliminar Usuario</div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post" action="" id="formulario_crear_precio">
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Identidad</strong></label>
                        <input type="number" name="id" id="id"
                               class="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Nombre</strong></label>
                        <input type="text" name="nombre" id="nombre" required maxlength="255" class="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Apellido</strong></label>
                        <input type="text" name="apellido" id="apellido" required maxlength="255" class="form-control"/>
                    </div>
                    <div class="col-md-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Tipo de usuario</strong></label>
                        <input type="text" name="tipo_usuario" id="tipo_usuario" required maxlength="255" class="form-control" readonly value="Recepcionista"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Telefono</strong></label>
                        <input type="number" name="telefono" id="telefono" required step="any"
                               class="form-control"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Contraseña</strong></label>
                        <input type="password" name="password" id="password"
                               class="form-control"/>
                    </div>

                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>