<div class="container-fluid">
    <div class="col-md-2"></div>
    <ol class="breadcrumb">
        <li><a href="..">Inicio</a></li>
        <li><a class="ajax-request" href="/gestion_usuarios/gestion_usuario.php">Usuarios</a></li>
        <li><a class="active" href="#">Crear Usuario</a></li>
    </ol>
</div>
<div class="col-md-3"></div>
<div class="col-md-6">
    <div class="panel panel-default">
        <div class="panel-heading">Creacion de Usuario</div>
        <div class="panel-body">
            <div class="col-md-12">
                <form method="post" action="" id="formulario_crear_usuario">
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Identidad</strong></label>
                        <input type="text" name="id_usuario" id="id_usuario"
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
                        <input type="number" name="tipo_usuario" id="tipo_usuario" required maxlength="255"
                               class="form-control" readonly value="1"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Telefono</strong></label>
                        <input type="text" name="telefono" id="telefono" required step="any"
                               class="form-control"/>
                    </div>
                    <div class="col-sm-12">
                        <label class='control-sidebar-subheading' for="fecha"><strong>Contraseña</strong></label>
                        <input type="password" name="password" id="password"
                               class="form-control"/>
                    </div>
                    <input type="hidden" name="instrucciones" value="usuario 1">
                    <div class="col-sm-12">
                        <br>
                        <input type="submit" class="btn btn-primary" value="Enviar" disabled/>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<script>
    $(document).ready(function () {
        $('input[type="submit"]').removeAttr('disabled');
    });
    $(formulario_crear_usuario).submit(function (event) {
        event.preventDefault();
        $.ajax({
            type: "POST",
            url: 'probando.php',
            data: $("#formulario_crear_usuario").serializeArray(),
            dataType: 'html',
            success: function (data) {
                console.log(data);
                alert("SI FUNCIONA");
                $('input[type="submit"]').attr("disabled", "true");
            },
            error: function (data) {
                $('input[type="submit"]').removeAttr('disabled');
                console.log(data);
            }
        });
    });
</script>